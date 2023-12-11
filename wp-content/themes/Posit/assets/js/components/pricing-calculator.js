import PricingCalculator from '../class/PricingCalculator'

const init = function () {
    const calculatorEl = document.querySelector('#price-calculator')

    if (calculatorEl) {
        let calculator = new PricingCalculator(calculatorEl)
        calculator.init()
    }
}

export default init
