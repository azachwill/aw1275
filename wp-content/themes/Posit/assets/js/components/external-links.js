const init = function () {
    const siteOrigin = window.location.origin
    const anchors = document.querySelectorAll('a')

    anchors.forEach((el) => {
        const origin = el.origin || ''
        // Force anchors to open in a new tab whenever
        // the origin of the URL doesn't belong to the current site.
        if (origin && origin !== siteOrigin) {
            el.target = '_blank'
            el.rel = 'noopener noreferrer'
        }
    })
}

export default init
