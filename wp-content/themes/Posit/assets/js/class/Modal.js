class Modal {
    constructor(element, closeElement) {
        this.modal = element
        this.body = document.querySelector('body')
        this.closeModalBtn = closeElement

        this.parent = {}
    }

    init() {
        this.setListeners()
    }

    setListeners() {
        document.addEventListener('keydown', (key) => {
            if (key.code === 'Escape') {
                this.parent.focus()
                this.toggleModal(false)
            }

            if (key.code === 'Tab' || key.keyCode === 9) {
                const lastFocusableElem = this.modal.querySelector('.mktoButton') ?? this.closeModalBtn

                if (key.shiftKey && document.activeElement === this.closeModalBtn) {
                    lastFocusableElem.focus()
                    key.preventDefault()
                } else if (!key.shiftKey && document.activeElement === lastFocusableElem) {
                    this.closeModalBtn.focus()
                    key.preventDefault()
                }
            }
        })

        document.addEventListener('click', (evt) => {
            if (
                this.modal.classList.contains('active') &&
                !evt.target.closest('.modal-wrapper') &&
                !evt.target.closest('.card-member') &&
                !evt.target.closest('.partner-modal-trigger') &&
                !evt.target.closest('.partner-form-modal-trigger') &&
                !evt.target.closest('.repeater-modal-trigger')
            ) {
                this.parent.focus()
                this.toggleModal(false)
            }
        })

        this.closeModalBtn.addEventListener('click', () => {
            this.parent.focus()
            this.toggleModal(false)
        })
    }

    toggleModal(show = true) {
        this.modal.classList.toggle('active', show)
        this.body.classList.toggle(
            this.modal.classList.contains('partner-form-modal') ? 'modal-active' : 'mobile-modal-active',
            show,
        )
    }

    setParent(parent) {
        this.parent = parent
    }
}

export default Modal
