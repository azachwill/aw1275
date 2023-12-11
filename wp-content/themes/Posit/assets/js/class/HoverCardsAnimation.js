import { gsap } from 'gsap'
import throttle from 'lodash.throttle'
import { CustomEase } from 'gsap/CustomEase'
import TailwindBreakpoints from './TailwindBreakpoints'

gsap.registerPlugin(CustomEase)

CustomEase.create('expand', '0, 0.24, 0.05, 1.01')

class HoverCardsAnimation {
    constructor(container) {
        this.resizeThrottle = 300
        this.mouseEnterThrottle = 800
        this.growContainerNumber = 20
        this.cardsContainer = container
        this.breakpoints = new TailwindBreakpoints()
        this.cards = this.cardsContainer?.children ?? []
    }

    init() {
        if (this.cardsContainer) {
            this.onHoverCard()

            window.addEventListener(
                'resize',
                throttle(() => {
                    const cards = Array.from(this.cards)

                    this.onHoverCard()
                    gsap.set(cards, { clearProps: 'all' })
                }, this.resizeThrottle),
            )
        }
    }

    onMouseEnter(card, cards, isFullWidth, index, cardsWidth, height) {
        if (window.innerWidth >= this.breakpoints.parseBreakpoint(this.breakpoints.breakpoints.lg)) {
            if (isFullWidth) {
                this.timeline = gsap
                    .timeline({})
                    .to(card, { height: () => height + this.growContainerNumber, duration: 0.4 }, 0)
                    .to(
                        cards[index + 1],
                        {
                            duration: 0.4,
                            height: () => height - this.growContainerNumber,
                        },
                        0,
                    )
                    .to(
                        cards[index + 2],
                        {
                            duration: 0.4,
                            height: () => height - this.growContainerNumber,
                        },
                        0,
                    )
            } else if (index % 2 === 0) {
                this.timeline2 = gsap
                    .timeline({})
                    .to(card, {
                        duration: 0.4,
                        x: () => -this.growContainerNumber,
                        width: () => cardsWidth[index] + this.growContainerNumber,
                        height: () => height + this.growContainerNumber,
                    })
                    .to(
                        cards[index - 2],
                        {
                            duration: 0.4,
                            height: () => height - this.growContainerNumber,
                        },
                        0,
                    )
                    .to(
                        cards[index - 1],
                        {
                            duration: 0.4,
                            width: () => cardsWidth[index - 1] - this.growContainerNumber,
                            height: () => height + this.growContainerNumber,
                        },
                        0,
                    )
            } else {
                this.timeline3 = gsap
                    .timeline({})
                    .to(card, {
                        duration: 0.4,
                        width: () => cardsWidth[index] + this.growContainerNumber,
                        height: () => height + this.growContainerNumber,
                    })
                    .to(
                        cards[index - 1],
                        {
                            duration: 0.4,
                            height: () => height - this.growContainerNumber,
                        },
                        0,
                    )
                    .to(
                        cards[index + 1],
                        {
                            duration: 0.4,
                            x: this.growContainerNumber,
                            width: () => cardsWidth[index + 1] - this.growContainerNumber,
                            height: () => height + this.growContainerNumber,
                        },
                        0,
                    )
            }
        }
    }

    onMouseLeave(card, cards, index, cardsWidth, height, isFullWidth) {
        if (window.innerWidth >= this.breakpoints.parseBreakpoint(this.breakpoints.breakpoints.lg)) {
            if (isFullWidth) {
                gsap.timeline({})
                    .to(card, { height, duration: 0.4 }, 0)
                    .to(cards[index + 1], { duration: 0.4, height }, 0)
                    .to(cards[index + 2], { duration: 0.4, height }, 0)
            } else if (index % 2 === 0) {
                gsap.timeline({})
                    .to(card, { duration: 0.4, x: 0, width: () => cardsWidth[index], height })
                    .to(cards[index - 2], { duration: 0.4, height }, 0)
                    .to(cards[index - 1], { duration: 0.4, width: () => cardsWidth[index - 1], height }, 0)
            } else {
                gsap.timeline({})
                    .to(card, { duration: 0.4, width: () => cardsWidth[index], height })
                    .to(cards[index - 1], { duration: 0.4, height }, 0)
                    .to(cards[index + 1], { x: 0, duration: 0.4, width: () => cardsWidth[index + 1], height }, 0)
            }
        }
    }

    onHoverCard() {
        const cards = Array.from(this.cards)

        cards.forEach((card, index) => {
            const height = card.offsetHeight
            const cardsWidth = cards.map((card) => card.offsetWidth)
            const isFullWidth = !!card.className.split(' ').find((value) => value === 'full-width')

            const onMouseLeave = () => this.onMouseLeave(card, cards, index, cardsWidth, height, isFullWidth)
            const onMouseEnter = throttle(
                () => this.onMouseEnter(card, cards, isFullWidth, index, cardsWidth, height),
                this.mouseEnterThrottle,
            )

            card.addEventListener('mouseenter', onMouseEnter)
            card.addEventListener('mouseleave', onMouseLeave)
        })
    }
}

export default HoverCardsAnimation
