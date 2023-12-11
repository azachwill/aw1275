import Glide from '@glidejs/glide/dist/glide'
import throttle from 'lodash.throttle'
import resolveConfig from 'tailwindcss/resolveConfig'
import tailwindConfig from '../../../tailwind.config'

const fullConfig = resolveConfig(tailwindConfig)
const RESIZE_THROTTLE = 300
const SCROLLBAR_WIDTH = 8 //Desktop only

class Slider {
    constructor(container) {
        this.slider = container
        this.overflowVisible = !!this.slider.dataset.trackOverflow
        this.afterPeek = 60
        this.mobileAfterPeek = 40
        this.glideOptions = {
            type: this.slider.dataset.type ?? 'carousel',
            startAt: 0,
            keyboard: true,
            bound: !!this.slider.dataset.type,
            perView: this.slider.dataset.desktopViews ?? 2,
            peek: {
                before: this.slider.dataset.peekBefore ?? 0,
                after: this.slider.dataset.peekAfter ?? this.afterPeek,
            },
            breakpoints: {
                960: {
                    peek: { before: this.slider.dataset.tabletPeekBefore ?? 0, after: this.afterPeek },
                    perView: this.slider.dataset.tabletViews ?? 2,
                },
                480: {
                    perView: 1,
                    peek: {
                        before: this.slider.dataset.mobilePeekBefore ?? 0,
                        after: this.slider.dataset.mobilePeekAfter ?? this.mobileAfterPeek,
                    },
                },
            },
        }
    }

    parseBreakpoint(value) {
        return parseInt(value.replace('px', ''))
    }

    resizeTracks() {
        if (this.overflowVisible) {
            const breakpoints = fullConfig.theme.screens
            const offset = window.innerWidth >= this.parseBreakpoint(breakpoints.lg) ? SCROLLBAR_WIDTH : 0
            const width = window.innerWidth - this.slider.getBoundingClientRect().left - offset
            this.slider.style.width = `${width}px`
        }
    }

    addResizeListeners() {
        if (this.overflowVisible) {
            this.resizeTracks()

            window.addEventListener(
                'resize',
                throttle(() => {
                    this.resizeTracks()
                }, RESIZE_THROTTLE),
            )
        }
    }

    init() {
        let options = {}
        options = Object.assign(options, this.glideOptions)

        this.resizeTracks()

        let glide = new Glide(this.slider, options).mount()

        this.addResizeListeners()

        return glide
    }

    destroy() {
        if (this.overflowVisible) {
            window.removeEventListener(
                'resize',
                throttle(() => {
                    this.resizeTracks()
                }, RESIZE_THROTTLE),
            )
        }
    }
}

export default Slider
