import Modal from '../class/Modal'

const init = () => {
    const modalEl = document.querySelector('.partner-form-modal')
    const formModalTriggers = document.querySelectorAll('.partner-form-modal-trigger')

    if (modalEl) {
        const closeModal = modalEl.querySelector('.close-modal')
        const modal = new Modal(modalEl, closeModal)
        modal.init()

        formModalTriggers.forEach((trigger) => {
            trigger.addEventListener('click', (event) => {
                modal.toggleModal(true)
                modal.setParent(trigger)
                closeModal.focus()
                event.preventDefault()
                return false
            })
        })
    }
}

export default init
