import { gsap } from 'gsap'
import { CustomEase } from 'gsap/CustomEase'

gsap.registerPlugin(CustomEase)

CustomEase.create('custom', '0, 0.24, 0.05, 1.01')

class Benefits02 {
    constructor() {
        this.openSource = document.querySelector('#benefits-3')
        this.desktopResolution = 1024
    }

    init() {
        if (this.openSource) {
            this.animation()
        }
    }

    animation() {
        gsap.timeline({})
            .fromTo(
                '#first-img',
                {
                    x: -50,
                    delay: 0,
                    width: '10%',
                    ease: 'custom',
                },
                {
                    x: 0,
                    delay: 0.3,
                    duration: 0.8,
                    width: () => (window.outerWidth < this.desktopResolution ? '33.5%' : '21.4%'),
                },
                0,
            )
            .fromTo(
                '#second-img',
                {
                    width: '13%',
                    delay: 0,
                    ease: 'custom',
                },
                {
                    delay: 0.3,
                    duration: 0.8,
                    width: () => (window.outerWidth < this.desktopResolution ? '45.5%' : '28.9%'),
                },
                0,
            )
            .fromTo(
                '#third-img',
                {
                    width: '50%',
                    delay: 0,
                    ease: 'custom',
                },
                { width: '100%', delay: 0.3, duration: 0.8 },
                0,
            )
    }
}

export default Benefits02
