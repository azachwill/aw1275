import TomSelect from 'tom-select'

const init = function () {
    let filterSelect = document.getElementById('filter-select')

    if (filterSelect) {
        return new TomSelect('#filter-select', {
            render: {
                option: function (data) {
                    return `<div data-slug="${data.slug}" data-name="${data.name}" data-type="${data.type}">${data.text}</div>`
                },
                item: function (item) {
                    return `<div data-slug="${item.slug}" data-name="${item.name}" data-type="${item.type}">${item.text}</div>`
                },
                no_results: function () {
                    return '<div class="no-results">No results found</div>'
                },
            },
            maxOptions: null,
            sortField: [{ field: '$order' }, { field: '$score' }],
            plugins: {
                checkbox_options: {},
            },
            onInitialize: function () {
                let select = document.getElementsByClassName('ts-wrapper')[0]
                select.classList.remove('hidden')

                let selectContainer = select.querySelector('.ts-control')
                let countFilters = document.createElement('span')
                countFilters.innerHTML = '0'
                countFilters.className = 'checkbox-count hidden'

                selectContainer.appendChild(countFilters)

                let dropdown = document.getElementsByClassName('ts-dropdown')[0]

                let buttonsContainer = document.createElement('div')
                buttonsContainer.className = 'dropdownButtonsContainer'

                dropdown.append(buttonsContainer)

                let clearButton = document.createElement('button')
                clearButton.innerHTML = 'Clear'
                clearButton.className = 'clean-search-btn clean-search btn btn-md-secondary col-span-6'

                let applyButton = document.createElement('button')
                applyButton.innerHTML = 'Apply'
                applyButton.className = 'apply-btn btn btn-md-primary col-span-6'

                buttonsContainer.appendChild(clearButton)
                buttonsContainer.appendChild(applyButton)
            },
        })
    }
}

export default init
