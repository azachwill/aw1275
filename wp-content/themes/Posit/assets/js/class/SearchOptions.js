import filterSearch from '../components/filter-search'
import shareModal from '../components/share-modal'

class SearchOptions {
    constructor(container) {
        this.searchContainer = container
        this.multiSelect = filterSearch()
        this.select = document.getElementById('filter-select')
        this.postsContainer = document.querySelector('.posts-container')
        this.searchInput = this.searchContainer.querySelector('.search-input')
        this.lastCharacter = -1
        this.enterKey = 13
    }

    loadSearch() {
        const data = this.getUrlParams()

        if (this.multiSelect.items.length > 0) {
            let filterCount = document.querySelector('.checkbox-count')
            filterCount.classList.remove('hidden')
            filterCount.textContent = this.multiSelect.items.length
        }
        this.filterPosts(data)
    }

    getUrlParams() {
        const data = this.getDefaultFilters()
        const queryString = window.location.search
        const urlParams = new URLSearchParams(queryString)
        const page = urlParams.get('_page') ?? 1

        urlParams.forEach((value, key) => {
            if (key !== '_page' && key !== 'search' && key !== 'archive') {
                const ids = []
                let type = 'taxonomy'
                const slugs = value.split(',')

                slugs.forEach((slug) => {
                    const checkbox = this.select.querySelector(`option[data-name='${key}'][data-slug='${slug}']`)
                    const id = checkbox.value
                    type = checkbox.dataset.type !== type ? checkbox.dataset.type : type
                    ids.push(id)
                    this.multiSelect.addItem(id.toString())
                })

                data.filters[key] = {
                    slugs,
                    ids,
                    type: type,
                    name: key,
                }
            } else if (key === 'search') {
                data[key] = value
                const search = this.select.querySelector(`input[data-name=${key}][type="text"]`)
                if (search !== null) {
                    search.text = value
                }
            }
        })

        data.page = page
        return data
    }

    getDefaultFilters() {
        return {
            page: 1,
            search: '',
            filters: {},
            postType: this.searchContainer.dataset.postType ?? '',
            postsPerPage: this.searchContainer.dataset.postsPerPage || -1,
            postArchive: this.searchContainer.dataset.postArchive,
            action: 'get_ajax_posts',
        }
    }

    createFormData(data) {
        let formData = new FormData()

        if (Object.keys(data.filters).length > 0) {
            formData.append('data[filters]', 'true')

            for (let dataKey in data) {
                if (dataKey === 'filters') {
                    for (let previewKey in data[dataKey]) {
                        if (!formData.has(previewKey)) {
                            formData.append(`data[${dataKey}][${previewKey}]`, previewKey)
                        }

                        for (let key in data[dataKey][previewKey]) {
                            formData.append(`data[${dataKey}][${previewKey}][${key}]`, data[dataKey][previewKey][key])
                        }
                    }
                }
            }
        }

        formData.append('data[page]', data.page)
        formData.append('data[search]', data.search)
        formData.append('data[postType]', data.postType)
        formData.append('data[postsPerPage]', data.postsPerPage)
        formData.append('data[postArchive]', data.postArchive)
        formData.append('action', 'get_ajax_posts')

        return formData
    }

    filterPosts(data = {}) {
        fetch(window.ajax_url, {
            method: 'POST',
            body: this.createFormData(data),
        })
            .then((response) => response.text())
            .then((data) => {
                this.postsContainer.innerHTML = ''

                if (data) {
                    this.postsContainer.innerHTML = data
                    this.setConfigPaginationButtons(data)
                    shareModal()
                }
            })
    }

    setConfigPaginationButtons(data) {
        const pagination = document.querySelector('.pagination-container')

        if (pagination !== null) {
            const changePagesButtons = pagination.querySelectorAll('.pagination-page')
            const prevBtn = pagination.querySelector('.prev')
            const nextBtn = pagination.querySelector('.next')

            const location = new URL(window.location.href)
            const params = new URLSearchParams(window.location.search)
            // Resets the page param before iterating over the buttons
            params.delete('_page')

            Array.from(changePagesButtons).forEach((button) => {
                const page = button.dataset.pageNumber

                if (Number(page) !== 1) {
                    params.set('_page', page)
                }

                location.search = params.toString()
                button.setAttribute('href', location.toString())
            })

            prevBtn.disable = parseInt(data.page) === 1
            nextBtn.disable = parseInt(data.page) === parseInt(pagination.dataset.pages)

            this.onClickChangePages(changePagesButtons)
        }
    }

    onClickChangePages = (changePagesButtons = []) => {
        if (changePagesButtons.length) {
            Array.from(changePagesButtons).forEach((button) => {
                const page = button.dataset.pageNumber ?? 1

                button.addEventListener('click', () => {
                    const location = new URL(window.location.href)
                    const data = this.getUrlParams()
                    let url = new URL(`${location.origin}${location.pathname}?_page=${page}`)

                    if (data.search) {
                        const search = encodeURIComponent(data.search)
                        url.searchParams.set('search', search)
                    }

                    if (data.filters && Object.keys(data.filters).length) {
                        Object.entries(data.filters).map((filter) => {
                            let ids = ''
                            if (filter[1].ids.length > 1) {
                                filter[1].ids.forEach((id) => {
                                    ids += `${id},`
                                })

                                url.searchParams.set(filter[1].name, ids.slice(0, (this.lastCharacter = -1)))
                            } else if (filter[1].ids.length) {
                                url.searchParams.set(filter[1].name, filter[1].ids[0])
                            }
                        })
                    }

                    window.location.replace(url)
                })
            })
        }
    }

    onClickApplyFilters() {
        const filters = {}
        const text = this.searchInput.value
        const location = new URL(window.location.href)
        const params = new URLSearchParams(window.location.search)
        const selected = this.multiSelect.items

        const filterTypes = Array.from(this.select.querySelectorAll('option[data-id]'))
            .map((option) => option.dataset.name)
            .filter((val, idx, newArr) => !!val && newArr.indexOf(val) === idx)

        //Resets any filters that need to be overridden by the new selection
        params.delete('search')
        filterTypes.forEach((filter) => params.delete(filter))

        if (text) {
            params.set('search', encodeURIComponent(text))
        }

        selected.forEach((id) => {
            const checkbox = this.select.querySelector(`option[value='${id}']`)
            const taxName = checkbox.dataset.name
            const slug = checkbox.dataset.slug

            if (!(id && taxName)) return
            filters[taxName] = filters[taxName] ? `${filters[taxName]},${slug}` : [slug]
        })

        Object.keys(filters).forEach((key) => {
            params.set(key, filters[key])
        })

        location.search = params.toString()
        window.location.replace(location.toString())
    }

    cleanSearch() {
        const data = {
            page: 1,
            search: '',
            filters: {},
            postType: '',
            postsPerPage: -1,
        }
        data.postType = this.searchContainer.dataset.postType ?? ''
        const postsPerPage = this.searchContainer.dataset.postsPerPage

        if (postsPerPage) {
            data.postsPerPage = postsPerPage
        }

        this.multiSelect.clear()

        const url = new URL(window.location.href)
        const newUrl = data.search
            ? `${url.origin}${url.pathname}?search=${data.search}`
            : `${url.origin}${url.pathname}`
        window.location.replace(newUrl)
    }

    selectButtonsActions() {
        document.querySelector('.apply-btn').addEventListener('click', () => {
            this.onClickApplyFilters()
        })

        document.querySelector('.clean-search-btn').addEventListener('click', () => {
            this.cleanSearch()
        })
    }

    init() {
        this.loadSearch()
        this.selectButtonsActions()

        this.searchInput.addEventListener('keyup', (evt) => {
            if (evt.keyCode === this.enterKey) {
                this.onClickApplyFilters()
            }
        })
    }
}

export default SearchOptions
