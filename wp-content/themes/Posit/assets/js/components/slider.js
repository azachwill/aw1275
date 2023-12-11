import Slider from '../class/Slider'

const init = function () {
    let sliderContainers = document.querySelectorAll('.glide')
    sliderContainers.forEach((sliderContainer) => {
        const slider = new Slider(sliderContainer)
        slider.init()
    })
}

export default init
