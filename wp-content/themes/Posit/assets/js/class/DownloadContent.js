class DownloadContent {
    constructor(container) {
        this.container = $(container)
        this.selector = this.container.find('.select-items')
    }

    init() {
        this.setContent()
    }

    setContent() {
        let selectedOption = this.selector.find('div[data-index]')

        selectedOption.on('click', (e) => {
            this.showSelectedData(e.target)
        })

        selectedOption.on('keydown', (e) => {
            if (e.code === 'Enter') {
                this.showSelectedData(e.target)
            }
        })
    }

    showSelectedData(target) {
        let valueSelected = $(target).attr('data-index')
        this.container.find('div[data-version].block').removeClass('block').addClass('hidden')
        this.container
            .find('div[data-version=' + valueSelected + '].hidden')
            .removeClass('hidden')
            .addClass('block')
    }
}

export default DownloadContent
