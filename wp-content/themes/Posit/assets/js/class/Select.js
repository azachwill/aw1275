class Select {
    constructor(container) {
        this.container = container
    }

    init() {
        let index, listSize, selectElement, appendedElement, appendedElementList, optionItem

        selectElement = this.container.getElementsByTagName('select')[0]
        listSize = selectElement.length

        /* For each element, create a new DIV that will act as the selected item: */
        appendedElement = document.createElement('DIV')
        appendedElement.setAttribute('class', 'select-selected')
        appendedElement.innerHTML = selectElement.options[selectElement.selectedIndex].innerHTML
        this.container.appendChild(appendedElement)
        /* For each element, create a new DIV that will contain the option list: */
        appendedElementList = document.createElement('DIV')
        appendedElementList.setAttribute('class', 'select-items select-hide')
        for (index = 0; index < listSize; index++) {
            /* For each option in the original select element,
            create a new DIV that will act as an option item: */
            optionItem = document.createElement('DIV')
            optionItem.innerHTML = selectElement.options[index].innerHTML
            optionItem.setAttribute('data-index', index)
            optionItem.setAttribute('tabindex', 0)
            if (index === 0) {
                optionItem.classList.add('same-as-selected')
            }

            optionItem.addEventListener('click', (e) => {
                /* When an item is clicked, update the original select box,
                and the selected item: */
                this.handleClickSelectOption(e.currentTarget)
            })

            this.enableAccessibility(optionItem, (key) => {
                this.handleClickSelectOption(key.target)
            })

            appendedElementList.appendChild(optionItem)
        }

        this.container.appendChild(appendedElementList)

        appendedElement.addEventListener('click', (e) => {
            /* When the select box is clicked, close any other select boxes,
            and open/close the current select box: */
            e.stopPropagation()
            this.closeAllSelect(e.currentTarget)
            e.currentTarget.nextSibling.classList.toggle('select-hide')
            e.currentTarget.classList.toggle('select-arrow-active')
        })

        this.enableAccessibility(this.container, (key) => {
            key.stopPropagation()
            this.closeAllSelect(appendedElement)
            appendedElement.nextSibling.classList.toggle('select-hide')
            appendedElement.classList.toggle('select-arrow-active')
        })

        /* If the user clicks anywhere outside the select box,
        then close all select boxes: */
        document.addEventListener('click', this.closeAllSelect())
    }

    handleClickSelectOption(target) {
        var i, k, selectedItem, parentSelect, parentPrevSibling, parentSelectSize, selectedItemSize

        parentSelect = target.parentNode.parentNode.getElementsByTagName('select')[0]
        parentSelectSize = parentSelect.length
        parentPrevSibling = target.parentNode.previousSibling
        for (i = 0; i < parentSelectSize; i++) {
            if (parentSelect.options[i].innerHTML === target.innerHTML) {
                parentSelect.selectedIndex = i
                parentPrevSibling.innerHTML = target.innerHTML
                selectedItem = target.parentNode.getElementsByClassName('same-as-selected')
                selectedItemSize = selectedItem.length
                for (k = 0; k < selectedItemSize; k++) {
                    selectedItem[k].removeAttribute('class')
                }

                target.setAttribute('class', 'same-as-selected')
                break
            }
        }
        parentPrevSibling.click()
    }

    closeAllSelect(elmnt) {
        /* A function that will close all select boxes in the document,
        except the current select box: */
        let i,
            optionList,
            selectedOption,
            optionListSize,
            selectedOptionSize,
            arrNo = []
        optionList = document.getElementsByClassName('select-items')
        selectedOption = document.getElementsByClassName('select-selected')
        optionListSize = optionList.length
        selectedOptionSize = selectedOption.length
        for (i = 0; i < selectedOptionSize; i++) {
            if (elmnt === selectedOption[i]) {
                arrNo.push(i)
            } else {
                selectedOption[i].classList.remove('select-arrow-active')
            }
        }
        for (i = 0; i < optionListSize; i++) {
            if (arrNo.indexOf(i)) {
                optionList[i].classList.add('select-hide')
            }
        }
    }

    enableAccessibility(target, callback) {
        document.addEventListener('keydown', (key) => {
            if (key.code === 'Enter') {
                if (key.target === target) {
                    callback(key)
                }
            }
        })
    }
}

export default Select
