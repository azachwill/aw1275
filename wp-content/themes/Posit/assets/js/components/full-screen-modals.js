import FullScreenModal from '../class/FullScreenModal'
import scrollToContent from '../components/scroll-to-content'

const initFullScreenModals = () => {
    const modals = document.querySelectorAll('.modal')

    for (let modalEl of modals) {
        const modal = new FullScreenModal(modalEl, modalEl.parentNode.querySelector('[data-open-modal]'))
        modal.init()

        //TODO: If needed, add more selectors and use the scrollContent function to each matching element
        if (modalEl.querySelector('.toc-list')) {
            scrollToContent(modalEl.querySelector('.toc-list'), () => modal.toggleModal())
        }
    }
}

export default initFullScreenModals
