import Countdown from '../class/Countdown'

const init = function () {
    let countdownContainers = document.querySelectorAll('.countdown')
    countdownContainers.forEach((countdownContainer) => {
        const countdown = new Countdown(countdownContainer)
        countdown.init()
    })
}

export default init
