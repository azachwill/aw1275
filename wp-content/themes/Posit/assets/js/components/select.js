import Select from '../class/Select'

const init = function () {
    const select = document.querySelectorAll('.select-dropdown')
    if (select.length) {
        select.forEach(function (element) {
            new Select(element).init()
        })
    }
}

export default init
