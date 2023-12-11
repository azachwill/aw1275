import Tabs from '../class/Tabs'

const init = () => {
    const tabsContainer = document.querySelectorAll('.tabs-component')

    tabsContainer.forEach((container) => {
        const tabs = new Tabs(container)
        tabs.init()
    })
}

export default init
