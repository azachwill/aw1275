class TableOfContent {
    constructor(container) {
        this.container = container
        this.list = this.container.querySelector('ul')
    }

    init() {
        this.activeTab()
    }

    activeTab() {
        const url = window.location.href
        const link = this.list.querySelector(`a[href='${url}']`)

        if (link) {
            link.classList.add('active')
        }
    }
}

export default TableOfContent
