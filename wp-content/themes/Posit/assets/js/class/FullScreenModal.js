class FullScreenModal {
    constructor(element, trigger) {
        this.element = element
        this.triggerEl = trigger
        this.closeEl = this.element.querySelector('[data-close-modal]')
    }

    init() {
        this.triggerEl.addEventListener('click', (event) => {
            event.preventDefault()
            this.toggleModal()
        })
        this.closeEl.addEventListener('click', () => {
            this.toggleModal()
        })
    }

    toggleModal() {
        const body = document.querySelector('body')
        const mobileNavWrapper = document.querySelector('.mobile-nav-wrapper')

        this.element.classList.toggle('opacity-0')
        this.element.classList.toggle('open')
        this.element.classList.toggle('pointer-events-none')
        if (this.element.parentNode.classList.contains('sticky')) {
            this.element.parentNode.classList.toggle('z-[2]')
            this.element.parentNode.classList.toggle('z-50')
        }
        body.classList.toggle('modal-active')
        mobileNavWrapper && mobileNavWrapper.classList.toggle('z-10')
    }
}

export default FullScreenModal
