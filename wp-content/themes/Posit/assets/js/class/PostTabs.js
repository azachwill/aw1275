class PostTabs {
    constructor(container) {
        this.container = container
        this.tabsContainer = this.container.querySelector('.nav-tabs')
        this.tabsContent = this.container.querySelector('.tab-content')?.children ?? []
        this.tabs = this.tabsContainer?.children ?? []
    }

    init() {
        this.setInitialActiveTab()
        this.onClickedTab()
    }

    setInitialActiveTab() {
        Array.from(this.tabsContent).forEach((item) => {
            item.classList.add('hidden')
        })

        this.tabs[0].classList.add('active')
        this.tabs[0].firstChild.classList.add('active')
        this.tabsContent[0].classList.remove('hidden')
        this.tabsContent[0].classList.add('active')
    }

    onClickedTab() {
        Array.from(this.tabs).forEach((item, index) => {
            item.addEventListener('click', () => {
                this.setTabContentVisible(item, index)
            })
        })
    }

    setTabContentVisible(item, index) {
        Array.from(this.tabs).forEach((item) => {
            item.classList.remove('active')
            item.firstChild.classList.remove('active')
        })

        Array.from(this.tabsContent).forEach((item) => {
            item.classList.add('hidden')
        })

        this.tabs[index].classList.add('active')
        this.tabs[index].firstChild.classList.add('active')

        let tabTarget = item.firstChild.dataset.bsTarget

        if (tabTarget !== undefined) {
            let target = this.container.querySelector(tabTarget)

            if (target) {
                target.classList.remove('hidden')
                target.classList.add('active')
            }
        } else {
            this.tabsContent[index].classList.remove('hidden')
            this.tabsContent[index].classList.add('active')
        }
    }
}

export default PostTabs
