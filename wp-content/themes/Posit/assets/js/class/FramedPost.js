import debounce from 'lodash.debounce'

class FramedPost {
    constructor(frameObj) {
        this.iframe = frameObj
        this.resizeDelay = 300
        this.iframeOffset = 40
        // @TODO: Don't hard-code the css location
        this.cssLocation = `${window.location.origin}/wp-content/themes/Posit/dist/iframe-blogs.css`
    }

    init() {
        this.startListeners()
    }

    startListeners() {
        window.addEventListener(
            'resize',
            debounce(() => {
                this.setFrameHeight()
            }, this.resizeDelay),
        )

        this.iframe.addEventListener('load', () => {
            this.setFrameHeight()
            this.injectScripts()
            this.injectStylesheet()

            setTimeout(() => this.setFrameHeight(), this.resizeDelay)
        })
    }

    injectScripts() {
        const doc = this.iframe.contentDocument
        const scriptTag = doc.createElement('script')

        scriptTag.innerHTML = `
            document.querySelectorAll('a')
                .forEach((el) => {
                    const url = el.origin + el.pathname
                    const isAnchorLink = el.classList.contains('anchorjs-link') || location.href.indexOf(url) !== -1
                    el.target = isAnchorLink ? '_self' : '_blank'
                })
        `
        doc.head.append(scriptTag)
    }

    injectStylesheet() {
        const doc = this.iframe.contentDocument
        const styleTag = doc.createElement('link')

        // Assign link attributes before inserting into iframe
        styleTag.type = 'text/css'
        styleTag.rel = 'stylesheet'
        styleTag.href = this.cssLocation

        doc.head.append(styleTag)
    }

    setFrameHeight() {
        this.iframe.height = this.iframeOffset + this.iframe.contentDocument.body.offsetHeight
    }
}

export default FramedPost
