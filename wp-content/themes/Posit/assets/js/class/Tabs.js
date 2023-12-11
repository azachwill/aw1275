class Tabs {
    constructor(container) {
        this.container = container
        this.tabsContainer = this.container.querySelector('.tabs')
        this.tabContentContainer = this.container.querySelector('.tabs-content-container')?.children ?? []
        this.tabs = this.tabsContainer?.children ?? []
    }

    init() {
        if (this.tabs.length && this.tabContentContainer.length) {
            this.tabs[0].classList.add('active')
            this.tabContentContainer[0].classList.add('active')

            this.onClickBtn()
        }
    }

    onClickBtn() {
        const tabs = Array.from(this.tabs)

        const onClickTab = (event) => {
            const parent = event.target.parentElement
            const currentKey = event.currentTarget.id.split('-')[1]
            const activeTab = document.querySelector('.tab.active')
            const tabContent = document.querySelector('.tab-content.active')

            if (activeTab && tabContent) {
                activeTab.classList.remove('active')
                tabContent.classList.remove('active')
            }

            parent.classList.add('active')
            this.tabContentContainer[currentKey].classList.add('active')
        }

        tabs.forEach((tab) => {
            const btn = tab.querySelector('button')
            btn.addEventListener('click', onClickTab)
        })
    }
}

export default Tabs
