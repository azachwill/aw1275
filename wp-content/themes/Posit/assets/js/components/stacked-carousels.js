import StackedCarousel from '../class/StackedCarousel'

const init = function () {
    const carousels = document.querySelectorAll('.swiper.stacked-carousel')
    carousels.forEach((carouselEl) => {
        const carousel = new StackedCarousel(carouselEl)
        carousel.init()
    })
}

export default init
