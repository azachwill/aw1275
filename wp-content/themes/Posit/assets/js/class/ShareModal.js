class ShareModal {
    constructor(container) {
        this.body = document.querySelector('body')
        this.shareModalParent = container
        this.shareModal = this.shareModalParent.querySelector('.share-modal')
        this.shareModalWrapper = this.shareModalParent.querySelector('.share-modal-wrapper')
        this.shareModalButtons = this.shareModalParent.querySelectorAll('.btn-share-modal')

        if (this.shareModal) {
            this.btnCloseModal = this.shareModal.querySelector('.close-modal')
            this.url = this.shareModal.querySelector('.url-to-copy')
            this.copyUrl = this.shareModal.querySelector('.copy-to-clipboard')
            this.socialShareButtons = this.shareModal.querySelectorAll('.social-share')
        }
        this.post = {}
    }

    init() {
        this.setListeners()
    }

    setListeners() {
        document.addEventListener('keydown', (key) => {
            if (key.code === 'Escape') {
                this.hideShareModal(this.shareModal.classList.contains('active'))
            }
        })

        document.addEventListener('keyup', (key) => {
            if (this.shareModal.classList.contains('active') && key.code === 'Tab') {
                if (!this.shareModal.contains(key.target)) {
                    this.btnCloseModal.focus()
                }
            }
        })

        document.addEventListener('click', (evt) => {
            if (
                !evt.target.closest('.share-modal-wrapper') &&
                !evt.target.closest('.post-slider-card') &&
                !evt.target.closest('.hero-wrapper') &&
                !evt.target.closest('.post-card')
            ) {
                this.hideShareModal(this.shareModal.classList.contains('active'))
            }
        })

        this.shareModalButtons.forEach((post) => {
            post.addEventListener('click', (evt) => {
                this.post = post
                this.showShareModal()
                evt.preventDefault()
                return false
            })
        })

        this.btnCloseModal.addEventListener('click', () => {
            this.hideShareModal(true)
        })

        this.copyUrl.addEventListener('click', () => {
            this.copyToClipboard()
        })

        this.socialShareButtons.forEach((socialShareBtn) => {
            socialShareBtn.addEventListener('click', () => {
                this.shareToSocials(socialShareBtn)
            })
        })
    }

    shareToSocials(socialShareBtn) {
        let href = ''
        switch (socialShareBtn.dataset.type) {
            case 'facebook':
                href =
                    'https://www.facebook.com/sharer/sharer.php?u=' +
                    this.post.dataset.url +
                    '&text=' +
                    this.post.dataset.title
                break
            case 'twitter':
                href = 'https://twitter.com/share?url=' + this.post.dataset.url + '&text=' + this.post.dataset.title
                break
            case 'linkedin':
                href = 'https://linkedin.com/share?url=' + this.post.dataset.url
                break
            default:
                break
        }
        socialShareBtn.href = href
    }

    copyToClipboard() {
        navigator.clipboard.writeText(this.post.dataset.url).then(
            function () {
                window.alert('The text was copied to your clipboard')
            },
            function () {
                window.alert('Error copying to clipboard')
            },
        )
    }

    showShareModal() {
        this.url.textContent = this.post.dataset.url
        this.body.classList.add('mobile-modal-active')
        this.shareModal.classList.add('active')
        this.shareModalWrapper.focus()
    }

    hideShareModal(fromModal) {
        this.body.classList.remove('mobile-modal-active')
        this.shareModal.classList.remove('active')
        if (fromModal && this.post.childNodes && this.post.childNodes.length) {
            this.post.focus()
        }
    }
}

export default ShareModal
