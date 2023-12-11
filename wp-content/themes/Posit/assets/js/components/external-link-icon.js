const initExternalLinkIcon = () => {
    const anchors = document.querySelectorAll('.ext-link-ic')
    const svgIconTemplate = `<svg class="ml-[7px] w-[23px] h-[22px]" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M11 13L20.9961 3" stroke="#447099" stroke-linejoin="round"/>
        <path d="M12 5H3V21H19V12" stroke="#447099" stroke-linejoin="bevel"/>
        <path d="M14 3H21V10" stroke="#447099" stroke-linejoin="bevel"/>
     </svg>
    `

    const span = document.createElement('span')
    span.innerHTML = svgIconTemplate
    const svgIcon = span.firstChild

    for (let anchor of anchors) {
        anchor.appendChild(svgIcon.cloneNode(true))
    }
}

export default initExternalLinkIcon
