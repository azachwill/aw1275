import Tooltip from '../class/Tooltip'

const init = function () {
    const tooltip = document.querySelectorAll('div.tooltip')
    if (tooltip.length) {
        tooltip.forEach(function (element) {
            new Tooltip(element).init()
        })
    }
}

export default init
