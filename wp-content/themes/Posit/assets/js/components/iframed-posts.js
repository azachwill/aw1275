import FramedPost from '../class/FramedPost'

const main = () => {
    const iframes = document.querySelectorAll('iframe[data-rendered-html]')

    iframes.forEach(function (frame) {
        const framedPost = new FramedPost(frame)
        framedPost.init()
    })
}

export default main
