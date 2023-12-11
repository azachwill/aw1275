import { gsap } from 'gsap'
import { CustomEase } from 'gsap/CustomEase'

gsap.registerPlugin(CustomEase)

CustomEase.create('expand', '0, 0.24, 0.05, 1.01')

class BackTop {
    constructor() {
        this.backTopBtn = document.getElementById('back-top')
        this.timeOut = 300
    }

    init() {
        if (this.backTopBtn) {
            this.onClickBtn()
        }
    }

    onClickBtn() {
        this.backTopBtn.addEventListener('click', () => {
            this.hideButton()

            setTimeout(() => {
                fullpage_api.moveTo('meet-us')
            }, this.timeOut)
        })

        this.backTopBtn.addEventListener('keypress', (e) => {
            if (e.key === 'Enter') {
                this.hideButton()

                setTimeout(() => {
                    fullpage_api.moveTo('meet-us')
                }, this.timeOut)
            }
        })
    }

    showButton = () => {
        gsap.to(this.backTopBtn, { duration: 0.3, ease: 'expand', autoAlpha: 1 })
    }

    hideButton = () => {
        gsap.to(this.backTopBtn, { duration: 0.3, ease: 'slow', autoAlpha: 0 })
    }
}

export default BackTop
