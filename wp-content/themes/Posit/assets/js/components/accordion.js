const init = function () {
    const expandableItems = document.querySelectorAll('.accordion-tab > .accordion')

    if (expandableItems.length) {
        expandableItems.forEach(function (explandableItem) {
            explandableItem.addEventListener('click', function () {
                handleOpenAccordion(this)
            })

            explandableItem.addEventListener('keydown', function (key) {
                if (key.code === 'Enter') {
                    handleOpenAccordion(this)
                }
            })
        })
    }
}

const handleOpenAccordion = function (element) {
    element.classList.toggle('active')
    const itemContent = element.nextElementSibling
    const plusIcon = element.querySelector('svg.plus-icon')
    const minusIcon = element.querySelector('svg.minus-icon')

    if (itemContent.style.maxHeight) {
        itemContent.style.maxHeight = null
        itemContent.style.opacity = 0
        itemContent.style.zIndex = 0
        plusIcon.style.display = 'block'
        minusIcon.style.display = 'none'
    } else {
        itemContent.style.maxHeight = itemContent.scrollHeight + 'px'
        itemContent.style.opacity = 100
        itemContent.style.zIndex = 1
        plusIcon.style.display = 'none'
        minusIcon.style.display = 'block'
    }
}

export default init
