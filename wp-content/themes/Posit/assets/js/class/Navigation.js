import throttle from 'lodash.throttle'

const RESIZE_THROTTLE = 300
const SEARCH_AUTOFOCUS_THROTTLE = 10

class Navigation {
    constructor(container, searchModal, mobileNav) {
        this.showDelay = 200
        this.searchOpen = false
        this.body = document.querySelector('body')
        this.nav = container
        this.mobileNav = mobileNav
        this.algoliaSearchResults = searchModal
        this.navParent = container.parentNode
        this.navTabs = this.nav.querySelectorAll('.navbar-item')
        this.itemsContainer = this.nav.querySelector('.items-container')
        this.search = this.nav.querySelector('.nav-search')
        this.algoliaSearchButton = this.nav.querySelector('#rstudio-search-button')
        this.mobileNavWrapper = this.mobileNav.querySelector('.mobile-nav-wrapper')
        this.searchMobile = this.mobileNav.querySelector('.nav-search')
        this.openMobileNav = this.mobileNav.querySelector('.open-mobile-nav')
        this.closeMobileNav = this.mobileNav.querySelector('.close-mobile-nav')
        this.mobileMenu = this.mobileNav.querySelector('.mobile-menu')
        this.mobileMenuItem = this.mobileNav.querySelectorAll('.mobile-menu-item')
        this.algoliaSearchInput = this.algoliaSearchResults.querySelector('.ais-SearchBox-input')

        this.bannerParent = null
        this.bannerWrapper = null
    }

    init() {
        this.setListeners()
        this.resizeBanners()
        this.addResizeListeners()
    }

    setListeners() {
        document.addEventListener('keyup', (key) => {
            if (
                key.code === 'Tab' &&
                (key.target.classList.contains('navbar-tab') || key.target.classList.contains('nav-search'))
            ) {
                this.hideDeskModal()
                this.nav.classList.remove('active')
            }
        })

        document.addEventListener('keydown', (key) => {
            if (key.code === 'Escape') {
                this.hideDeskModal()
                this.nav.classList.remove('active')
                this.hideSearchBox(true, false)
                this.search.classList.remove('accessibility')
            }

            if (key.code === 'Enter') {
                if (key.target === this.search || key.target === this.searchMobile) {
                    this.showSearchBox()
                }
            }
        })

        this.nav.addEventListener('mouseleave', () => {
            if (!this.searchOpen) {
                this.hideDeskModal()
                this.nav.classList.remove('active')
            }
        })

        this.navTabs.forEach((tab) => {
            let tabTimeout = null
            tab.addEventListener('mouseenter', () => {
                tabTimeout = setTimeout(() => {
                    this.showDeskModal(tab)
                }, this.showDelay)
            })

            tab.addEventListener('mouseleave', () => {
                if (tabTimeout) {
                    clearTimeout(tabTimeout)
                }
            })

            tab.querySelector('.navbar-tab').addEventListener('click', (e) => {
                if (tab.classList.contains('active')) {
                    this.hideDeskModal()
                    this.nav.classList.remove('active')
                } else {
                    this.showDeskModal(tab)
                }
                e.preventDefault()
                return false
            })
        })

        this.openMobileNav.addEventListener('click', this.showOrHideMobileNav)
        this.closeMobileNav.addEventListener('click', this.showOrHideMobileNav)

        this.mobileMenuItem.forEach((mobileItem) => {
            const mobileTab = mobileItem.querySelector('.mobile-tab')
            const mobileModal = mobileItem.querySelector('.mobile-nav-modal')
            const mobileHeader = mobileModal.querySelector('.mobile-header')
            mobileTab.addEventListener('click', () => {
                this.showOrHideMobileModal(mobileModal)
            })
            mobileHeader.addEventListener('click', () => {
                this.showOrHideMobileModal(mobileModal)
            })
        })

        document.addEventListener('click', (element) => {
            if (element.target.id === 'rstudio-search-button' || element.target.id === 'rs-search-button-mobile') {
                if (this.search.classList.contains('accessibility')) {
                    this.setSearchActiveNav()
                    return
                }
                if (this.searchOpen) {
                    this.hideSearchBox(false, false)
                } else {
                    this.searchOpen = true
                    this.setSearchActiveNav()
                }
            } else {
                if (this.algoliaSearchResults.style.display === 'block') {
                    return
                }
                this.searchOpen = false
                this.setSearchInactiveNav()
            }
        })
    }

    showDeskModal(tab) {
        this.hideDeskModal()
        tab.classList.add('active')
        this.nav.classList.add('active')
        this.itemsContainer.classList.add('active')
        tab.setAttribute('aria-expanded', 'true')
        tab.querySelector('.navbar-tab').classList.add('active')
        tab.querySelector('.nav-modal').classList.add('active')

        if (this.searchOpen) {
            this.hideSearchBox(false, true)
        }
    }

    hideDeskModal() {
        this.navTabs.forEach((tab) => {
            tab.classList.remove('active')
            this.itemsContainer.classList.remove('active')
            tab.setAttribute('aria-expanded', 'false')
            tab.querySelector('.navbar-tab').classList.remove('active')
            tab.querySelector('.nav-modal').classList.remove('active')
        })
    }

    showOrHideMobileNav = () => {
        this.mobileNav.classList.toggle('active')
        this.mobileNavWrapper.classList.toggle('active')
        this.mobileMenu.classList.toggle('hidden')
        this.openMobileNav.classList.toggle('hidden')
        this.closeMobileNav.classList.toggle('hidden')
        this.body.classList.toggle('modal-active')
    }

    showOrHideMobileModal(mobileModal) {
        this.mobileNavWrapper.classList.toggle('open')
        mobileModal.classList.toggle('active')
    }

    showSearchBox() {
        this.search.classList.add('accessibility')
        this.algoliaSearchButton.click()
        setTimeout(() => {
            this.algoliaSearchInput?.focus()
        }, SEARCH_AUTOFOCUS_THROTTLE)
    }

    hideSearchBox(withFocus, isSoftHide) {
        if (isSoftHide) {
            if (this.algoliaSearchResults.style.display === 'block') {
                this.algoliaSearchResults.style.display = 'none'
                this.searchOpen = false
            }
        } else {
            if (this.algoliaSearchResults.style.display === 'block') {
                this.algoliaSearchResults.style.display = 'none'
                if (withFocus) {
                    this.search.focus()
                }
                this.searchOpen = false
            }
            this.setSearchInactiveNav()
        }
    }

    setSearchActiveNav() {
        this.navParent.classList.add('search-active')
        this.mobileNavWrapper.classList.add('search-active')
        this.hideDeskModal()
        this.nav.classList.remove('active')
    }

    setSearchInactiveNav() {
        this.navParent.classList.remove('search-active')
        this.mobileNavWrapper.classList.remove('search-active')
    }

    resizeBanners() {
        this.navTabs.forEach((tab) => {
            this.bannerParent = tab.querySelector('.banner-parent')
            this.bannerWrapper = tab.querySelector('.banner-wrapper')
            if (this.bannerParent && this.bannerWrapper) {
                const bannerParentWidth = this.bannerParent.getBoundingClientRect().width
                const bannerWrapperWidth = this.bannerWrapper.getBoundingClientRect().width
                bannerWrapperWidth >= bannerParentWidth
                    ? this.bannerWrapper.classList.add('with-banner')
                    : this.bannerWrapper.classList.remove('with-banner')
            }
        })
    }

    addResizeListeners() {
        window.addEventListener(
            'resize',
            throttle(() => {
                this.resizeBanners()
            }, RESIZE_THROTTLE),
        )
    }

    destroy() {
        window.removeEventListener(
            'resize',
            throttle(() => {
                this.resizeBanners()
            }, RESIZE_THROTTLE),
        )
    }
}

export default Navigation
