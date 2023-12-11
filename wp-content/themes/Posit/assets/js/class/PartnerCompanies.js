import { gsap } from 'gsap'
import ScrollTrigger from 'gsap/ScrollTrigger'
import TailwindBreakpoints from './TailwindBreakpoints'

gsap.registerPlugin(ScrollTrigger)

class PartnerCompanies {
    constructor(container) {
        this.animation = null
        this.container = container
        this.breakpoints = new TailwindBreakpoints()
        this.companies = this.container.querySelector('.companies')
        this.marquee = this.container.querySelector('.marquee-component')
        this.companiesContainer = this.container.querySelector('.companies-container')
        this.partnerCompaniesContainer = this.container.querySelector('.partner-companies-container')
    }

    init() {
        if (this.container) {
            if (window.innerWidth >= this.breakpoints.parseBreakpoint(this.breakpoints.breakpoints.lg)) {
                this.desktopAnimation()
            } else {
                this.companies.classList.add('hidden')
            }

            this.resizeListener()
        }
    }

    desktopAnimation() {
        if (this.companiesContainer.offsetWidth > this.partnerCompaniesContainer.offsetWidth) {
            this.animation = gsap.to(this.companies, {
                ease: 'slow',
                x: () => `-=${this.companiesContainer.offsetWidth - this.partnerCompaniesContainer.offsetWidth}`,
                scrollTrigger: {
                    scrub: true,
                    end: 'bottom top',
                    start: 'bottom-=100px bottom',
                    trigger: this.container,
                },
            })
        }
    }

    resizeListener() {
        window.addEventListener('resize', () => {
            if (window.innerWidth >= this.breakpoints.parseBreakpoint(this.breakpoints.breakpoints.lg)) {
                gsap.set(this.companies, { clearProps: 'transform' })
                this.desktopAnimation()
            } else if (this.animation) {
                this.animation.kill()
            }
        })
    }
}

export default PartnerCompanies
