import SearchOptions from '../class/SearchOptions'

const init = function () {
    const searchContainer = document.querySelectorAll('.search-options-container')
    if (searchContainer.length) {
        searchContainer.forEach(function (element) {
            new SearchOptions(element).init()
        })
    }
}

export default init
