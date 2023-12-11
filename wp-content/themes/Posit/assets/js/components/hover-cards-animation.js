import HoverCardsAnimation from '../class/HoverCardsAnimation'

const init = () => {
    const hoverCardsContainers = document.querySelectorAll('#hover-cards-container')

    hoverCardsContainers.forEach((container) => {
        const hoverCardsAnimation = new HoverCardsAnimation(container)
        hoverCardsAnimation.init()
    })
}

export default init
