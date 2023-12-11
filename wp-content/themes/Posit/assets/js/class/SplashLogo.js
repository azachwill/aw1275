import { gsap } from 'gsap'
import { CustomEase } from 'gsap/CustomEase'

gsap.registerPlugin(CustomEase)

import resolveConfig from 'tailwindcss/resolveConfig'
import tailwindConfig from '../../../tailwind.config.js'

const fullConfig = resolveConfig(tailwindConfig)

CustomEase.create('logo-ease', '0.57, 0.54, 0.13, 0.99')

class SplashLogo {
    constructor() {
        this.breakpoints = fullConfig.theme.screens
        this.logo = document.querySelector('#hero-logo')
        this.reveal = document.querySelector('#reveal-logo')
        this.letters = document.querySelector('#logo-letters')
        this.arrows = document.querySelector('#main-logo-arrows')
        this.container = document.querySelector('#splash-logo')

        this.timeline = gsap.timeline()
        this.timelineLogo = gsap.timeline()

        this.delay = 700
    }

    init() {
        window.addEventListener('resize', () => {
            const destination = fullpage_api.getActiveSection().item

            if (destination.id !== this.container.id) {
                if (destination.id !== 'splash-video') {
                    const { arrows, letters, marginLeft } = this.getLogoLeftProperties()

                    gsap.timeline({})
                        .set([this.letters, this.reveal], {
                            width: letters.width,
                            height: letters.height,
                        })
                        .set(this.arrows, {
                            width: arrows.width,
                            height: arrows.height,
                        })
                        .to(this.reveal, { marginLeft })
                } else {
                    gsap.set([this.letters, this.reveal], {
                        clearProps: 'height',
                        width: this.getLogoWidth(),
                    })
                }

                gsap.set(this.logo, {
                    left: () => this.getLogoLeftPosition(),
                })
            } else {
                gsap.set(this.logo, { top: '50%' })
                this.clearGsapProperties()
            }
        })

        this.animation()
    }

    parseBreakpoint(value) {
        return parseInt(value.replace('px', ''))
    }

    animation() {
        gsap.set(this.logo, { left: '50%' })

        this.timelineLogo = gsap
            .timeline({
                delay: 0.4,
                onComplete: () => {
                    setTimeout(() => {
                        fullpage_api.moveTo('meet-us')
                    }, this.delay)
                },
            })
            .to(this.logo, {
                opacity: 1,
            })
            .to(
                this.logo,
                {
                    top: (innerHeight - this.logo.getBoundingClientRect().height) / 2,
                    duration: 0.4,
                    ease: 'logo-ease',
                },
                '<',
            )
            .set(this.reveal, {
                autoAlpha: 1,
                display: 'block',
                ease: 'logo-ease',
            })
            .fromTo(
                this.letters,
                {
                    xPercent: 100,
                    duration: 0.4,
                    ease: 'logo-ease',
                },
                {
                    xPercent: 0,
                },
            )
            .fromTo(
                this.reveal,
                {
                    width: 0,
                },
                {
                    width: () => this.getLogoWidth(),
                    duration: 0.4,
                    ease: 'logo-ease',
                },
                '<',
            )
    }

    logoAnimation() {
        const { arrows, letters, marginLeft } = this.getLogoLeftProperties()

        this.timeline = gsap
            .timeline({
                ease: 'none',
                onComplete: () => {
                    fullpage_api.setAllowScrolling(true, 'down')
                    fullpage_api.setKeyboardScrolling(true)
                },
                onReverseComplete: () => {
                    this.timelineLogo.reverse()
                },
            })
            .to(this.arrows, {
                width: arrows.width,
                height: arrows.height,
            })
            .to(
                [this.reveal, this.letters],
                {
                    width: letters.width,
                    height: letters.height,
                },
                '<',
            )
            .to(this.reveal, { marginLeft }, '<')
            .to(
                this.logo,
                {
                    top: '20px',
                    left: () => this.getLogoLeftPosition(),
                },
                '<',
            )
    }

    playLogoAnimation() {
        this.logoAnimation()
        this.timeline.play()
    }

    reverseLogoAnimation() {
        this.clearGsapProperties()
        this.timeline.reverse()
        fullpage_api.setAllowScrolling(false)
    }

    hideLogo() {
        this.timelineLogo.reverse()
    }

    logoBlack() {
        this.arrows.classList.remove('white')
        this.letters.classList.remove('white')
        this.arrows.classList.add('black')
        this.letters.classList.add('black')
    }

    logoWhite() {
        this.arrows.classList.remove('black')
        this.letters.classList.remove('black')
        this.arrows.classList.add('white')
        this.letters.classList.add('white')
    }

    getLogoLeftProperties() {
        let logoProperties = {}

        if (window.innerWidth >= this.parseBreakpoint(this.breakpoints.md)) {
            logoProperties = {
                arrows: {
                    width: '31px',
                    height: '32px',
                },
                letters: {
                    width: '90px',
                    height: '37px',
                },
                marginLeft: '10px',
            }
        } else {
            logoProperties = {
                arrows: {
                    width: '22px',
                    height: '22px',
                },
                letters: {
                    width: '63px',
                    height: '24px',
                },
                marginLeft: '7px',
            }
        }

        return logoProperties
    }

    getLogoLeftPosition() {
        if (window.innerWidth >= this.parseBreakpoint(this.breakpoints.lg)) {
            return '150px'
        } else if (window.innerWidth >= this.parseBreakpoint(this.breakpoints.md)) {
            return '130px'
        }

        return '70px'
    }

    getLogoWidth() {
        return window.innerWidth >= this.parseBreakpoint(this.breakpoints.md) ? '330px' : '157px'
    }

    clearGsapProperties() {
        gsap.timeline({})
            .set(
                this.reveal,
                {
                    width: () => this.getLogoWidth(),
                    clearProps: 'height, top',
                    ease: 'slow',
                    marginLeft: () =>
                        window.innerWidth >= this.parseBreakpoint(this.breakpoints.md) ? '37px' : '18px',
                },
                '<',
            )
            .set(
                this.letters,
                {
                    ease: 'slow',
                    clearProps: 'height, top',
                    width: () => this.getLogoWidth(),
                },
                '<',
            )
            .set(
                this.arrows,
                {
                    ease: 'slow',
                    clearProps: 'height, top',
                    width: () => (window.innerWidth >= this.parseBreakpoint(this.breakpoints.md) ? '120px' : '57px'),
                },
                '<',
            )
    }
}

export default SplashLogo
