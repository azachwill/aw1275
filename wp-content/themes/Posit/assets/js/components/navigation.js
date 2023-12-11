import Navigation from '../class/Navigation'

const init = function () {
    const navigations = document.querySelectorAll('.navigation')
    const searchModal = document.getElementById('rstudio-search-box')
    const mobileNav = document.querySelector('.mobile-nav')
    navigations.forEach((navigation) => {
        const nav = new Navigation(navigation, searchModal, mobileNav)
        nav.init()
    })
}

export default init
