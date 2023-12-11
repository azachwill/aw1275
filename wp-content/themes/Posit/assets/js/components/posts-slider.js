import Glide from '@glidejs/glide/dist/glide'

const init = function () {
    let glideContainers = document.querySelectorAll('.champion-posts')
    glideContainers.forEach((glideEl) => {
        new Glide(glideEl).mount()
    })
}

export default init
