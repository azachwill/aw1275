class OurTeam {
    constructor() {
        this.body = document.querySelector('body')

        this.ourTeam = document.querySelector('.our-team')
        this.cardMembers = document.querySelectorAll('.card-member')

        this.modal = document.querySelector('.sm-modal')

        if (this.modal) {
            this.btnCloseModal = this.modal.querySelector('.close-modal')
            this.img = this.modal.querySelector('.img')
            this.title = this.modal.querySelector('.title')
            this.role = this.modal.querySelector('.role')
            this.description = this.modal.querySelector('.description')
            this.socialLinks = this.modal.querySelector('.social-links')
        }

        this.member = ''
    }

    init() {
        this.setListeners()
    }

    setListeners() {
        if (this.ourTeam) {
            document.addEventListener('keydown', (key) => {
                if (key.code === 'Escape') {
                    this.hideMemberModal()
                }
            })

            document.addEventListener('click', (evt) => {
                if (!evt.target.closest('.modal-wrapper') && !evt.target.closest('.card-member')) {
                    this.hideMemberModal()
                }
            })

            this.cardMembers.forEach((member) => {
                member.addEventListener('click', (evt) => {
                    this.member = member
                    this.showMemberModal()
                    evt.preventDefault()
                    return false
                })
            })

            this.btnCloseModal.addEventListener('click', () => {
                this.hideMemberModal()
            })
        }
    }

    showMemberModal() {
        this.img.src = this.member.dataset.image
        this.title.textContent = this.member.dataset.title
        this.role.textContent = this.member.dataset.role
        this.description.textContent = this.member.dataset.description

        this.modal.classList.add('active')
        this.body.classList.add('mobile-modal-active')

        this.addSocialLinks()
    }

    addSocialLinks() {
        const socialLinks = JSON.parse(this.member.dataset.socialLinks)
        if (socialLinks) {
            socialLinks.forEach((socialLink) => {
                const a = document.createElement('a')
                const img = document.createElement('img')

                img.src = socialLink.icon.url
                img.alt = socialLink.icon.alt
                a.appendChild(img)
                a.href = socialLink.url
                a.classList.add('social-link')
                a.setAttribute('target', '_blank')

                this.socialLinks.appendChild(a)
            })
        }
    }

    hideMemberModal() {
        this.modal.classList.remove('active')
        this.body.classList.remove('mobile-modal-active')

        this.member = null
        this.img.src = null
        this.title.textContent = ''
        this.role.textContent = ''
        this.description.textContent = ''
        this.socialLinks.replaceChildren()
    }
}

export default OurTeam
