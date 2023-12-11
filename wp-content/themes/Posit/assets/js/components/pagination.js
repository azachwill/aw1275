import Pagination from '../class/Pagination'

const init = () => {
    const tabsComponent = document.querySelectorAll('.tabs-component-container')

    tabsComponent.forEach((container) => {
        const pagination = new Pagination(container)
        pagination.init()
    })
}

export default init
