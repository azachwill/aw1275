import { gsap } from 'gsap'
import { CustomEase } from 'gsap/CustomEase'

gsap.registerPlugin(CustomEase)

CustomEase.create('custom', '0, 0.24, 0.05, 1.01')

class Benefits03 {
    constructor() {
        this.inclusiveCommunity = document.querySelector('#benefits-2')
    }

    init() {
        if (this.inclusiveCommunity) {
            this.animation()
        }
    }

    animation() {
        gsap.timeline({})
            .fromTo(
                '#open-source-assets',
                {
                    scale: 0.6,
                    ease: 'custom',
                },
                { scale: 1, delay: 0.3, duration: 0.8 },
                0,
            )
            .fromTo(
                '#open-source-code',
                {
                    y: -200,
                    ease: 'custom',
                },
                { y: 0, delay: 0.3, duration: 0.8 },
                0,
            )
    }
}

export default Benefits03
