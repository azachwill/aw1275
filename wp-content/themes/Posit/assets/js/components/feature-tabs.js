const sections = document.getElementsByClassName('section-feature-tabs')

Array.from(sections).forEach((section) => {
    const tabs = section.querySelectorAll('[data-tab-target]')
    const tabContents = section.querySelectorAll('[data-tab-content]')

    tabs.forEach((tab) => {
        tab.addEventListener('click', () => {
            const target = section.querySelector(tab.dataset.tabTarget)

            tabContents.forEach((tabContent) => {
                tabContent.classList.remove('active')
            })

            tabs.forEach((tab) => {
                tab.classList.remove('active')
            })

            tab.classList.add('active')
            target.classList.add('active')
        })
    })
})
