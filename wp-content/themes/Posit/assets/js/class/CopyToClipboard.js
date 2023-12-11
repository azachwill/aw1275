const TOOLTIP_DURATION = 1000

class CopyToClipboard {
    constructor(container, targetSelector = '.code-snippet p', triggerSelector = '.copy-button, .mobile-copy-button') {
        this.container = container
        this.targetSelector = targetSelector
        this.triggers = container.querySelectorAll(triggerSelector)
    }

    init() {
        this.triggers.forEach((trigger) => this.addEventListener(trigger))
    }

    addEventListener(trigger) {
        trigger.addEventListener('click', (ev) => {
            const target = ev.currentTarget
            const contents = this.container.querySelector(this.targetSelector)

            if (!contents) return
            const text = contents.textContent?.trim()

            navigator?.clipboard?.writeText(text).then(
                () => {
                    this.showTooltip('The text was copied to your clipboard', target)
                },
                () => {
                    this.showTooltip('Error copying to clipboard', target)
                },
            )
        })
    }

    showTooltip(message, container = this.container) {
        const tooltipEl = document.createElement('div')

        tooltipEl.textContent = message
        tooltipEl.style.cssText = 'top:35px; right:0; width:150px;'
        tooltipEl.classList.add('tooltip', 'text-neutral-light', 'absolute', 'break-words', 'h-fit', 'max-h-min')
        container.append(tooltipEl)

        setTimeout(() => tooltipEl.remove(), TOOLTIP_DURATION)
    }
}

export default CopyToClipboard
