import Modal from '../class/RepeaterModalClass'

const init = () => {
    const repeaterModals = document.getElementsByClassName('repeater-modal-container')

    Array.from(repeaterModals).forEach((repeaterModal) => {
        const boxes = repeaterModal.querySelectorAll('.repeater-modal-box')
        Array.from(boxes).forEach((box) => {
            var modalEl = box.querySelector('.repeater-modal')
            var formModalTrigger = box.querySelector('.repeater-modal-trigger')
            var closeModal = box.querySelector('.close-modal')
            var modal = new Modal(modalEl, closeModal)
            formModalTrigger.addEventListener('click', (event) => {
                modal.toggleModal(true)
                modal.setParent(this)
                closeModal.focus()
                event.preventDefault()
                return false
            })

            closeModal.addEventListener('click', (event) => {
                modal.toggleModal(false)
                event.preventDefault()
                return false
            })
        })
    })
}

export default init
