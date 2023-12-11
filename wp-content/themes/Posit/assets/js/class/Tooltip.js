class Tooltip {
    constructor(container) {
        this.container = container
    }

    init() {
        const btn = this.container.previousElementSibling
        const closeBtn = this.container.querySelector('.close-button')

        btn.addEventListener('click', () => {
            this.showTooltip()
        })

        closeBtn.addEventListener('click', () => {
            this.hideTooltip()
        })

        this.enableAccessibility(btn, () => {
            this.showTooltip()
        })

        this.enableAccessibility(closeBtn, () => {
            this.hideTooltip()
        })
    }

    showTooltip() {
        this.container.classList.remove('hidden')
        this.container.classList.add('inline')
    }

    hideTooltip() {
        this.container.classList.remove('inline')
        this.container.classList.add('hidden')
    }

    enableAccessibility(target, callback) {
        target.addEventListener('keydown', (key) => {
            if (key.code === 'Enter') {
                callback()
            }
        })
    }
}

export default Tooltip
