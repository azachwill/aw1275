import { waitForDomElement } from '../helpers'

const init = () => {
    const videos = document.querySelectorAll('.video-container .wistia_responsive_wrapper')

    if (videos.length) {
        videos.forEach((video) => {
            hidePlayPauseCheckbox(video)
        })
    }
}

const hidePlayPauseCheckbox = async (video) => {
    const playPauseButton = await waitForDomElement(video, '.w-vulcan-v2-button')
    playPauseButton.setAttribute('tabindex', '-1')
}

export default init
