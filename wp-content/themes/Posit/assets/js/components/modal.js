import Modal from '../class/Modal'

const modalTypes = {
    partner: [
        {
            data: 'name',
            className: 'name',
        },
        {
            data: 'location',
            className: 'location',
        },
        {
            data: 'description',
            className: 'description',
        },
    ],
}

const fillPartnerInfo = (partner, modalEl) => {
    const contentSelector = '.partner-modal-content'
    const dataset = partner.parentElement.dataset
    const contentEl = modalEl.querySelector(contentSelector)

    modalTypes.partner.forEach((prop) => {
        const propEl = contentEl.querySelector(`.${prop.className}`)
        propEl.innerHTML = dataset[prop.data]
    })
}

const init = () => {
    const modalEl = document.querySelector('.sm-modal')
    const partnerTriggers = document.querySelectorAll('.partner-modal-trigger')

    if (modalEl) {
        const closeModal = modalEl.querySelector('.close-modal')
        const modal = new Modal(modalEl, closeModal)
        modal.init()

        partnerTriggers.forEach((partner) => {
            partner.addEventListener('click', (event) => {
                fillPartnerInfo(partner, modalEl)
                modal.toggleModal(true)
                modal.setParent(partner)
                closeModal.focus()
                event.preventDefault()
                return false
            })
        })
    }
}

export default init
