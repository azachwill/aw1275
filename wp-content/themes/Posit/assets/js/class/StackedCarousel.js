import Swiper, { Navigation, Pagination, EffectCreative } from 'swiper'
import TailwindBreakpoints from './TailwindBreakpoints'

const slideZOffset = -1
const transformModifier = 0.5

const CAROUSEL_TYPES = Object.freeze({
    solid: 'solid',
    blurred: 'blurred',
})

const CAROUSEL_ALIGNMENTS = Object.freeze({
    left: 'left',
    right: 'right',
})

const defaultSwiperOpts = {
    loop: false,
    loopPreventsSlide: true,
    navigation: {
        nextEl: '.swiper-btn-next',
        prevEl: '.swiper-btn-prev',
    },
    pagination: {
        el: '.swiper-pagination-container',
        type: 'bullets',
        bulletClass: 'swiper-pagination-dot',
    },
    effect: 'creative',
}

class StackedCarousel {
    constructor(
        container,
        slidesOffsets = {
            sm: 8,
            md: 16,
        },
        swiperOpts = defaultSwiperOpts,
    ) {
        this.container = container
        this.parent = this.container.closest('.container')
        this.offset = this.parent.querySelector('.stack-carousel-offset')
        this.controlsEl = this.container.querySelector('.swiper-controls')
        this.paginationEl = this.container.querySelector('.swiper-pagination-container')
        this.type = this.container?.dataset.type || CAROUSEL_TYPES.solid
        this.alignment = this.container?.dataset.alignment || CAROUSEL_ALIGNMENTS.left
        this.parent = this.container.closest('.container')
        this.slidesOffsets = slidesOffsets
        this.breakpoints = new TailwindBreakpoints()
        this.swiper = null
        this.swiperOpts = { ...defaultSwiperOpts, ...swiperOpts }
    }

    initCarousel() {
        const swiper = new Swiper(this.container, {
            ...this.swiperOpts,
            on: {
                init: () => {
                    const btn = this.container.querySelector('.swiper-slide').querySelector('.btn')
                    if (btn) {
                        btn.setAttribute('tabindex', 0)
                    }
                },
                beforeSlideChangeStart: () => {
                    const btn = this.container.querySelector('.swiper-slide.swiper-slide-active .btn')
                    if (btn) {
                        btn.setAttribute('tabindex', slideZOffset)
                    }
                },
                slideChange: () => {
                    const btn = this.container.querySelector('.swiper-slide.swiper-slide-active .btn')
                    if (btn) {
                        btn.setAttribute('tabindex', 0)
                    }
                },
            },
            modules: [Navigation, Pagination, EffectCreative],
            grabCursor: true,
            ...this.getCreativeEffect(this.slidesOffsets.sm, this.type),
            breakpoints: {
                481: this.getCreativeEffect(this.slidesOffsets.md, this.type),
            },
        })

        swiper.on('resize', (swiper) => {
            if (this.type === CAROUSEL_TYPES.solid && this.alignment === CAROUSEL_ALIGNMENTS.left) {
                if (swiper.currentBreakpoint !== 'max') {
                    this.controlsEl.style.transform = `translateX(${this.offset.offsetWidth}px)`
                    this.paginationEl.style.transform = `translateX(${this.offset.offsetWidth * transformModifier}px)`
                } else {
                    //Revert transformations on mobile
                    this.controlsEl.style.transform = 'translateX(0)'
                    this.paginationEl.style.transform = 'translateX(0)'
                }
            }
        })

        return swiper
    }

    getCreativeEffect(spacing, type = CAROUSEL_TYPES.solid) {
        if (type === CAROUSEL_TYPES.solid) {
            return {
                spaceBetween: spacing,
                creativeEffect: {
                    prev: {
                        translate: [0, 0, slideZOffset],
                    },
                    next: {
                        translate: [`calc(100% + ${spacing}px)`, 0, 0],
                    },
                },
            }
        }

        return {
            creativeEffect: {
                prev: {
                    opacity: 0,
                    translate: [0, 0, '-20%'],
                },
                next: {
                    opacity: 1,
                    translate: ['100%', 0, 0],
                },
            },
        }
    }

    init() {
        this.swiper = this.initCarousel()
    }
}

export default StackedCarousel
