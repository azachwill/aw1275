import ShareModal from '../class/ShareModal'

const init = function () {
    let shareModalParents = document.querySelectorAll('.share-modal-parent')
    shareModalParents.forEach((shareModalParent) => {
        const shareModal = new ShareModal(shareModalParent)
        shareModal.init()
    })
}

export default init
