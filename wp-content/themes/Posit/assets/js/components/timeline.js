import PinnedTimeline from '../class/PinnedTimeline'

const init = () => {
    const timelines = document.querySelectorAll('.timeline.pinned-timeline')

    timelines.forEach((tlEl) => {
        new PinnedTimeline(tlEl).init()
    })
}

export default init
