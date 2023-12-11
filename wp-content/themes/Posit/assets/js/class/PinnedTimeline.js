import { gsap } from 'gsap'
import { parseBreakpoint } from '../helpers'
import { ScrollTrigger } from 'gsap/ScrollTrigger'
import resolveConfig from 'tailwindcss/resolveConfig'
import tailwindConfig from '../../../tailwind.config'

const Y_SPACE = 100
const X_SPACE = 80 // GRID PADDING
const HORIZONTAL_MODIFIER = 0.5

class PinnedTimeline {
    constructor(container) {
        this.container = container
        this.horizontalContainer = this.container.querySelector('.timeline-horizontal')
        this.eventElems = this.container.querySelectorAll('.timeline-event-container')
    }

    initPinAnimation() {
        let horizontalSpacing = window.innerWidth - this.container.closest('.container').getBoundingClientRect().width
        horizontalSpacing = horizontalSpacing > 0 ? horizontalSpacing : 0

        const horizontalDistance = this.horizontalContainer.getBoundingClientRect().width
        const lastEl = this.eventElems[this.eventElems.length - 1]
        const fullConfig = resolveConfig(tailwindConfig)
        const breakpoints = fullConfig.theme.screens
        const lastWidth = lastEl ? lastEl.getBoundingClientRect().width + horizontalSpacing * HORIZONTAL_MODIFIER : 0

        // Add more movement to the left on wider screens so the last element is visible at the end
        const lgXAxis = -(horizontalDistance - window.innerWidth) - X_SPACE
        const xlgXAxis = lgXAxis - lastWidth

        gsap.timeline({
            ease: 'linear',
            scrollTrigger: {
                scrub: 1,
                pin: true,
                start: 'top 50%',
                trigger: this.horizontalContainer,
                end: `+=${horizontalDistance}`,
            },
        }).fromTo(
            this.horizontalContainer,
            { x: X_SPACE },
            { x: window.innerWidth >= parseBreakpoint(breakpoints.xl) ? xlgXAxis : lgXAxis },
            '<',
        )
    }

    initEventsAnimation() {
        this.eventElems.forEach((tlEvent, index) => {
            const isEven = index % 2 === 0
            const progressBar = tlEvent.querySelector('.timeline-progress-bar')
            const progress = progressBar.querySelector('.progress')
            const evEl = tlEvent.querySelector('.timeline-event')
            const barWidth = progressBar.offsetWidth

            const stConfig = {
                scrub: 0.5,
                fastScrollEnd: true,
                trigger: this.container,
                // when the __top of the trigger__ hits the __50% of the viewport__
                start: `+=${barWidth * index}px 100%`,
                // end after scrolling __barWidth__px beyond the start
                end: `+=${barWidth}`,
            }

            const staggerConfig = {
                y: 0,
                opacity: 1,
                stagger: {
                    each: 0,
                    from: 'center',
                    ease: 'power2.inOut',
                },
            }

            gsap.set(progress, { scaleX: 0 })
            gsap.set(evEl, { opacity: 0 })
            gsap.set(evEl.querySelectorAll('p'), { y: isEven ? Y_SPACE : -Y_SPACE })

            gsap.timeline({ scrollTrigger: stConfig })
                .to(progress, {
                    scaleX: 1,
                    ease: 'linear',
                })
                .to(evEl, { opacity: 1, duration: 0.1 })
                .to(evEl.querySelectorAll('p'), staggerConfig, '<')
        })
    }

    init() {
        gsap.registerPlugin(ScrollTrigger)
        const fullConfig = resolveConfig(tailwindConfig)
        const breakpoints = fullConfig.theme.screens
        const mainEl = this.container.closest('main')

        if (mainEl) {
            mainEl.classList.add('overflow-hidden')
        }

        ScrollTrigger.matchMedia({
            [`(min-width: ${breakpoints.lg})`]: () => {
                this.initPinAnimation()
                this.initEventsAnimation()
            },
        })
    }
}

export default PinnedTimeline
