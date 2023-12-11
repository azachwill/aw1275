class PricingCalculator {
    constructor(calculatorEl) {
        this.calculatorEl = calculatorEl

        this.standardMinRspUsers = 5 // min of devs for standard
        this.standardMinRscUsers = 20 // min of consumers for standard

        this.enterpriseMinRspUsers = 10 // min of devs for enterprise
        this.enterpriseMinRscUsers = 100 // min of consumers for enterprise

        this.rspUsers = 0 // developers input value
        this.rscUsers = 0 // consumers input value

        this.prices = {
            standard: 0,
            enterprise: 0,
        }

        this.inputs = this.calculatorEl.querySelectorAll('.pricing-input')
        this.resultEl = this.calculatorEl.querySelector('.pricing-result')
        this.messageEl = this.calculatorEl.querySelector('.pricing-message')
        this.rspInput = this.calculatorEl.querySelector('.pricing-input[name="rsp-users"]')
        this.rscInput = this.calculatorEl.querySelector('.pricing-input[name="rsc-users"]')

        /*eslint camelcase: ["error", {properties: "never"}]*/
        this.requestUrl = 'https://connect.posit.it/rspricing/'
        this.requestParams = {
            rsp_users: 0,
            rsc_users: 0,
            rsp_staging: 0,
            rsc_staging: 0,
            rsp_ha: 0,
            rsc_exec: 0,
            rspm_std: false,
        }

        this.messages = {
            tbd: 'TBD',
            NaN: 'User count inputs must be numeric and not empty.',
            error: 'We can’t seem to calculate that and we want to get this right. To ensure we do, please schedule a conversation with our sales team.',
            success:
                'Factors that increase the price from the lower price in the range shown above are the number and the types of servers required based on your specific use case (high availability, staging, unlimited, etc).',
            badRequest: 'Error making request',
            belowMinimumStandard: 'The base level of Posit Team includes 5 developers and 20 consumers.',
        }

        this.numberFormat = new Intl.NumberFormat('en-US', {
            style: 'currency',
            currency: 'USD',
            minimumFractionDigits: 0,
            maximumFractionDigits: 0,
        })
    }

    init() {
        this.setListeners()
        this.updatePrices()
    }

    formatPrice(price) {
        return `${this.numberFormat.format(price)}`
    }

    setListeners() {
        this.inputs.forEach((input) => {
            input.addEventListener('input', () => this.updatePrices())
        })
    }

    updatePrices() {
        this.rspUsers = this.rspInput.valueAsNumber
        this.rscUsers = this.rscInput.valueAsNumber

        if (this.validateValues()) {
            this.getPriceByType()
            this.getPriceByType('enterprise')
        }
    }

    setPrices(showPrices = true) {
        let priceString = this.messages.tbd

        if (showPrices) {
            const roundedDivider = 1000
            const roundedMin = Math.ceil(this.prices.standard / roundedDivider) * roundedDivider
            const roundedMax = Math.ceil(this.prices.enterprise / roundedDivider) * roundedDivider
            priceString = `${this.formatPrice(roundedMin)} - ${this.formatPrice(roundedMax)}`
        }

        this.resultEl.textContent = priceString
    }

    validateValues() {
        if (Number.isNaN(this.rspUsers) || Number.isNaN(this.rscUsers)) {
            this.setMessage('NaN')

            return false
        } else if (this.rspUsers < this.standardMinRspUsers || this.rscUsers < this.standardMinRscUsers) {
            this.setMessage('belowMinimumStandard')

            return false
        }

        this.setMessage()

        return true
    }

    setMessage(error = null) {
        const hasError = error !== null
        // if there's an error, looks for the specific error message or a default error message, else it shows a success message
        const message = hasError ? this.messages[error] ?? this.messages.error : this.messages.success

        this.setPrices(!hasError)
        this.messageEl.textContent = message
    }

    getPriceByType(type = 'standard') {
        const url = this.requestUrl + type
        const isStandard = type === 'standard'
        const rspUsers = isStandard ? this.rspUsers : Math.max(this.enterpriseMinRspUsers, this.rspUsers)
        const rscUsers = isStandard ? this.rscUsers : Math.max(this.enterpriseMinRscUsers, this.rscUsers)

        let data = {
            rsp_users: rspUsers,
            rsc_users: rscUsers,
        }

        if (isStandard) {
            data = {
                ...this.requestParams,
                ...data,
            }
        }

        const success = (response) => {
            this.prices[type] = response[0]

            if (this.prices.standard && this.prices.enterprise) {
                this.setPrices()
            }
        }

        $.get(url, data, success).fail((response) => {
            let error = this.messages.badRequest
            this.prices[type] = null

            if (
                response.responseJSON &&
                response.responseJSON.error &&
                response.responseJSON.code &&
                response.responseJSON.code.length > 0
            ) {
                error = response.responseJSON.error[0]
            }

            this.setMessage(error)
        })
    }
}

export default PricingCalculator
