import PostTabs from '../class/PostTabs'

const init = () => {
    const postTabsContainer = document.querySelectorAll('.panel-tabset')

    if (postTabsContainer) {
        postTabsContainer.forEach((container) => {
            const tabs = new PostTabs(container)
            tabs.init()
        })
    }
}

export default init
