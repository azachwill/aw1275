import DownloadContent from '../class/DownloadContent'

const init = function () {
    const downloadContent = $('.download-content')

    downloadContent.each((index, element) => {
        new DownloadContent(element).init()
    })
}

export default init
