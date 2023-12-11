class BodyBackground {
    constructor() {
        this.body = document.querySelector('body')
    }

    backgroundDarkBlue() {
        this.body.classList.remove('bg-blue5')
        this.body.classList.add('bg-blue1')
    }

    backgroundLightBlue() {
        this.body.classList.remove('bg-blue1')
        this.body.classList.add('bg-blue5')
    }
}

export default BodyBackground
