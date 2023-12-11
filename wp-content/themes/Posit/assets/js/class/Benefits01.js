import { gsap } from 'gsap'
import { CustomEase } from 'gsap/CustomEase'

gsap.registerPlugin(CustomEase)

CustomEase.create('custom', '0, 0.24, 0.05, 1.01')

class Benefits01 {
    constructor() {
        this.productsRange = document.querySelector('#benefits-1')
    }

    init() {
        if (this.productsRange) {
            this.animation()
        }
    }

    animation() {
        gsap.timeline({})
            .fromTo(
                '#first-code',
                {
                    bottom: -200,
                    ease: 'custom',
                },
                { bottom: -20, delay: 0.3, duration: 0.8 },
                0,
            )
            .fromTo(
                '#second-code',
                {
                    y: -200,
                    ease: 'custom',
                },
                { y: -10, delay: 0.3, duration: 0.8 },
                0,
            )
    }
}

export default Benefits01
