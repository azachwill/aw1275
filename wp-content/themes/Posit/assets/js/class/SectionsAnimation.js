import Fullpage from 'fullpage.js/dist/fullpage.extensions'

import BackTop from './BackTop'
import Benefits01 from './Benefits01'
import Benefits02 from './Benefits02'
import Benefits03 from './Benefits03'
import SplashLogo from './SplashLogo'
import ContactForm from './ContactForm'
import BodyBackground from './BodyBackground'

class SectionsAnimation {
    constructor() {
        this.main = document.querySelector('main')
        this.backTop = new BackTop()
        this.benefits01 = new Benefits01()
        this.benefits02 = new Benefits02()
        this.benefits03 = new Benefits03()
        this.splashLogo = new SplashLogo()
        this.contactForm = new ContactForm()
        this.bodyBackground = new BodyBackground()
        this.fullPage = {}

        this.delay50 = 50
        this.delay300 = 300
        this.delay400 = 400
        this.delay700 = 700
        this.delay800 = 800

        this.scrollIndicator = document.getElementById('scroll-indicator')

        window.dataLayer = window.dataLayer || []
    }

    init() {
        this.fullPage = new Fullpage('#fullpage', {
            licenseKey: this.main.dataset.key,
            css3: false,
            resetSliders: true,
            easingcss3: 'cubic-bezier(0.57, 0.54, 0.13, 0.99)',
            scrollingSpeed: this.delay800,
            afterRender: () => {
                fullpage_api.setAllowScrolling(false)
                fullpage_api.setKeyboardScrolling(false)

                this.bodyBackground.backgroundDarkBlue()
                this.splashLogo.init()
                this.splashLogo.clearGsapProperties()
            },
            afterLoad: (origin, destination) => {
                if (destination.index === 0 && origin.index === 1) {
                    this.splashLogo.clearGsapProperties()
                }

                if (destination.index === 1) {
                    this.scrollIndicator.classList.remove('absolute')
                    this.scrollIndicator.classList.add('fixed')
                    this.scrollIndicator.classList.remove('opacity-0')
                }

                if (origin.index === 7 && destination.index === 8) {
                    setTimeout(() => {
                        this.backTop.showButton()
                    }, this.delay50)
                }

                //google tag manager trigger
                this.sendSectionId(destination.item.id)
            },
            beforeLeave: (origin, destination) => {
                if (origin.index === 0 && destination.index === 1) {
                    this.splashLogo.playLogoAnimation()
                    setTimeout(() => {
                        this.splashLogo.logoBlack()
                    }, this.delay300)
                }

                if (destination.index === 1 && origin.index === 8) {
                    fullpage_api.setAllowScrolling(false, 'up')
                    fullpage_api.setKeyboardScrolling(false, 'up')
                    setTimeout(() => {
                        this.splashLogo.logoBlack()
                    }, this.delay400)
                }

                if (origin.index === 1 && destination.index === 2) {
                    fullpage_api.setAllowScrolling(true)
                    fullpage_api.setKeyboardScrolling(true)
                }

                if (origin.index === 2 && destination.index === 1) {
                    fullpage_api.setAllowScrolling(false, 'up')
                    fullpage_api.setKeyboardScrolling(false, 'up')
                }

                if (origin.index === 6 && destination.index === 5) {
                    this.splashLogo.logoBlack()
                }

                if (origin.index === 5 && destination.index === 6) {
                    setTimeout(() => {
                        this.splashLogo.logoWhite()
                    }, this.delay400)
                }

                if (origin.index === 8 && destination.index === 7) {
                    this.contactForm.removeInputBlur()
                    this.backTop.hideButton()
                }

                switch (destination.index) {
                    case 1:
                        this.bodyBackground.backgroundLightBlue()
                        break
                    case 2:
                        setTimeout(() => {
                            this.scrollIndicator.classList.remove('absolute')
                            this.scrollIndicator.classList.add('fixed')
                            this.scrollIndicator.classList.remove('opacity-0')
                        }, this.delay700)
                        break
                    case 3:
                        this.benefits01.init()
                        this.scrollIndicator.classList.remove('fixed')
                        this.scrollIndicator.classList.add('absolute')

                        setTimeout(() => {
                            this.scrollIndicator.classList.add('opacity-0')
                        }, this.delay700)
                        break
                    case 4:
                        this.benefits02.init()
                        break
                    case 5:
                        this.benefits03.init()
                        this.bodyBackground.backgroundLightBlue()
                        break
                    case 6:
                        this.bodyBackground.backgroundDarkBlue()
                        break
                    // Contact form
                    case 8:
                        this.contactForm.init()
                        break
                    default:
                        break
                }
            },
        })
    }

    disableScrolling() {
        this.fullPage.setAllowScrolling(false)
    }

    sendSectionId(sectionId) {
        if (window.dataLayer.length) {
            dataLayer.push({
                event: 'section_visited',
                section: sectionId,
            })
        }
    }
}

export default SectionsAnimation
