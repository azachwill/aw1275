class MultiselectDropdown {
    constructor() {
        this.body = document.querySelector('body')
        this.multiselectDropdown = document.querySelector('.multiselect-dropdown')
        this.selectOption = document.querySelector('.select-option')
        this.btnCloseModal = document.querySelector('.btn-close-modal')
        this.checkboxCount = document.querySelector('.checkbox-count')
        this.checkboxInputs = document.querySelectorAll('.checkbox-input')
        this.btnCleanSearch = document.querySelector('.clean-search')
        this.filtersTitle = document.querySelector('.filters-title')

        this.selectedFilters = []
    }

    init() {
        if (this.multiselectDropdown) {
            this.setListeners()
            this.countCheckboxes()
        }
    }

    setListeners() {
        document.addEventListener('click', (evt) => {
            if (!evt.target.closest('.multiselect-dropdown')) {
                this.hideModal()
            }
        })
        this.selectOption.addEventListener('click', () => {
            this.multiselectDropdown.classList.contains('active') ? this.hideModal() : this.showModal()
        })
        this.btnCloseModal.addEventListener('click', () => {
            this.hideModal()
        })
        this.checkboxInputs.forEach((input) => {
            input.addEventListener('change', () => {
                this.handleInputChange(input)
            })

            input.addEventListener('keydown', (key) => {
                if (key.code === 'Enter') {
                    input.checked = !input.checked
                    this.handleInputChange(input)
                }
            })
        })
        this.btnCleanSearch.addEventListener('click', (evt) => {
            this.cleanSearch()
            evt.preventDefault()
            return false
        })
    }

    handleInputChange(input) {
        const filter = document.querySelector('label[for="' + input.id + '"]').textContent
        if (input.checked) {
            this.selectedFilters.push(filter)
        } else {
            this.selectedFilters = this.selectedFilters.filter((data) => data !== filter)
        }
        this.countCheckboxes()
        this.setFiltersTitle()
    }

    cleanSearch() {
        this.checkboxInputs.forEach((input) => {
            input.checked = false
        })
        this.selectedFilters = []
        this.countCheckboxes()
        this.setFiltersTitle()
    }

    setFiltersTitle() {
        if (this.filtersTitle) {
            this.selectedFilters.length > 0
                ? (this.filtersTitle.textContent = this.selectedFilters.join(', '))
                : (this.filtersTitle.textContent = 'View All')
        }
    }

    countCheckboxes() {
        const checkboxCount = this.multiselectDropdown.querySelectorAll(
            'input[data-id][type="checkbox"]:checked',
        ).length
        if (checkboxCount > 0) {
            this.checkboxCount.textContent = checkboxCount.toString()
            this.checkboxCount.classList.remove('hidden')
        } else {
            this.checkboxCount.classList.add('hidden')
        }
    }

    showModal() {
        this.multiselectDropdown.classList.add('active')
        this.multiselectDropdown.parentNode.parentNode.classList.add('parent-active')
        this.body.classList.add('modal-active')
    }

    hideModal() {
        this.multiselectDropdown.classList.remove('active')
        this.multiselectDropdown.parentNode.parentNode.classList.remove('parent-active')
        this.body.classList.remove('modal-active')
    }
}

export default MultiselectDropdown
