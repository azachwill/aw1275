const toggleTabs = (index, tabs, tabsContent, show) => {
    tabs[index].classList.toggle('active-tab', show)
    tabsContent[index].classList.toggle('active-tab', show)
}

const init = () => {
    const groups = document.querySelectorAll('.tabs-group')

    if (groups) {
        groups.forEach((group) => {
            const tabs = group.querySelectorAll('button.tab-link[name="tab-selector"]')
            const tabsContent = group.parentElement.parentElement.querySelectorAll(
                '.tabs-content-container .tab-content',
            )
            let index = 0

            toggleTabs(index, tabs, tabsContent, true)

            tabs.forEach((tab) => {
                tab.addEventListener('click', () => {
                    toggleTabs(index, tabs, tabsContent, false)

                    index = tab.dataset.index

                    toggleTabs(index, tabs, tabsContent, true)
                })
            })
        })
    }
}

export default init
