import shareModal from '../components/share-modal'

const NOT_PAGINATED = -1

class Pagination {
    constructor(container) {
        this.container = container
        this.tabs = this.container.querySelectorAll('.tab-with-pagination')
        this.translationTab = this.container.querySelector('.translations-tab')

        this.defaultSlug = this.tabs[0]?.dataset?.type ?? 'posit-cheatsheets'
    }

    init() {
        if (this.tabs.length) {
            this.getUrlParams()
            this.onClickTabs()
            this.onClickTranslationsTab()
        }
    }

    getUrlParams() {
        const params = new URLSearchParams(window.location.search)
        const page = params.get('_page')?.replace('/', '') ?? 1
        const type = params.get('type')?.replace('/', '') ?? this.defaultSlug

        if (type !== 'translations') {
            this.loadSearch({ page, slug: type })
        }

        this.activeTab(type)
    }

    getFormData(data) {
        const formData = new FormData()
        const postType = this.container.getAttribute('data-post-type') ?? ''
        const postsPerPage = this.container.getAttribute('data-posts-per-page') ?? NOT_PAGINATED

        formData.append('data[page]', data.page)
        formData.append('data[slug]', data.slug)
        formData.append('data[postType]', postType)
        formData.append('data[postsPerPage]', postsPerPage)
        formData.append('action', 'get_paginated_posts')

        return formData
    }

    loadSearch(data) {
        fetch(window.ajax_url, {
            method: 'POST',
            body: this.getFormData(data),
        })
            .then((response) => response.text())
            .then((response) => {
                const container = this.container.querySelector(`div[data-slug=${data.slug}]`)

                container.innerHTML = response
                this.setConfigPaginationButtons(data)
                shareModal()
            })
    }

    updateUrl(slug) {
        const location = new URL(window.location.href)
        const url = `${location.origin}${location.pathname}?type=${slug}/`
        window.history.replaceState(null, '', url)

        this.getUrlParams()
    }

    onClickTranslationsTab() {
        if (this.translationTab) {
            this.translationTab.addEventListener('click', () => this.updateUrl('translations'))
        }
    }

    onClickTabs = () => {
        this.tabs.forEach((tab) => {
            const slug = tab.getAttribute('data-slug')

            tab.addEventListener('click', () => this.updateUrl(slug))
        })
    }

    activeTab = (slug) => {
        if (slug.length) {
            const tab = document.querySelector('.tab.active')
            const tabContent = document.querySelector('.tab-content.active')
            const currentTab = document.querySelector(`.tab[data-name=${slug}]`)
            const currentTabContent = document.querySelector(`.tab-content[data-slug=${slug}]`)

            if (tab && tabContent && currentTab && currentTabContent) {
                tab.classList.remove('active')
                tabContent.classList.remove('active')

                currentTab.classList.add('active')
                currentTabContent.classList.add('active')
            }
        }
    }

    setConfigPaginationButtons(data) {
        const pagination = document.querySelector(`div.tab-content[data-slug=${data.slug}] > .pagination-container`)
        const buttons = pagination.querySelectorAll('.pagination-page')

        if (buttons.length) {
            buttons.forEach((button) => {
                const location = new URL(window.location.href)
                const page = button.getAttribute('data-page-number')
                const url = `${location.origin}${location.pathname}?type=${data.slug}&_page=${page}/`

                button.setAttribute('href', url)
            })

            this.disablePrevNextButtons(pagination, data)
        }
    }

    disablePrevNextButtons(container, data) {
        const prevBtn = container.querySelector('.prev')
        const nextBtn = container.querySelector('.next')

        prevBtn.setAttribute('disabled', parseInt(data.page) === 1)
        nextBtn.setAttribute('disabled', parseInt(data.page) === parseInt(container.getAttribute('data-pages')))
    }
}

export default Pagination
