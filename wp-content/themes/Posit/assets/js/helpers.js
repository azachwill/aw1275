export const parseBreakpoint = (value) => parseInt(value.replace('px', ''))

export const waitForDomElement = (parentWrapper, selector) => {
    return new Promise((resolve) => {
        let awaitedElement = parentWrapper.querySelector(selector)
        if (awaitedElement) {
            return resolve(awaitedElement)
        }

        const observer = new MutationObserver(() => {
            if (parentWrapper.querySelector(selector)) {
                resolve(parentWrapper.querySelector(selector))
                observer.disconnect()
            }
        })

        observer.observe(document.body, {
            childList: true,
            subtree: true,
        })
    })
}
