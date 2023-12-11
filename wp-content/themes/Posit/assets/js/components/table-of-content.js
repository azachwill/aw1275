import TableOfContent from '../class/TableOfContent'

const init = () => {
    const tableOfContents = document.querySelectorAll('.table-of-content')

    tableOfContents.forEach((container) => {
        const tableOfContent = new TableOfContent(container)
        tableOfContent.init()
    })
}

export default init
