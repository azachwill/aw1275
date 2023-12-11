import CopyToClipboard from '../class/CopyToClipboard'

const init = function () {
    const codeSnippets = document.querySelectorAll('[data-component-id="code-snippet"]')

    codeSnippets.forEach((snippet) => {
        new CopyToClipboard(snippet).init()
    })
}

export default init
