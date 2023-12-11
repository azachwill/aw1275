const init = (containerEl, pressCallback = () => null) => {
    const scrollToAnchors = containerEl.querySelectorAll('a')

    scrollToAnchors.forEach((anchorEl) => {
        const href = anchorEl.dataset.ref || anchorEl.href
        anchorEl.addEventListener('click', (e) => {
            if (href.startsWith('#')) {
                e.preventDefault()
                const targetEl = document.querySelector(href)
                if (targetEl) window.scrollTo(0, targetEl.offsetTop)
                pressCallback()
            }
        })
    })
}

export default init
