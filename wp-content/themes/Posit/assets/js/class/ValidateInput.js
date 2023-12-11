class ValidateInput {
    constructor() {
        this.$inputs = document.querySelectorAll('.input-secondary, .input-primary')
    }

    init() {
        this.validateInput()
    }

    validateInput() {
        this.$inputs.forEach((input) => {
            input.addEventListener('mouseout', () => {
                input.value.trim().length ? input.classList.add('typed') : input.classList.remove('typed')
            })
        })
    }
}

export default ValidateInput
