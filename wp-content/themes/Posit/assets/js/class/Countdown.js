class Countdown {
    constructor(container) {
        this.countdownContainer = container
        this.dateInSecs = this.countdownContainer.dataset.dateSecs
        this.weeksContainer = this.countdownContainer.querySelector('.weeks')
        this.daysContainer = this.countdownContainer.querySelector('.days')
        this.hoursContainer = this.countdownContainer.querySelector('.hours')
        this.minutesContainer = this.countdownContainer.querySelector('.minutes')

        this.timeout = 1000

        this.epochDate = 1
        this.epochMonth = 0
        this.epochYear = 1970

        this.days = 7
        this.hours = 24
        this.minutes = 60
        this.seconds = 60
        this.miliseconds = 1000
    }

    init() {
        this.setInterval()
    }

    setInterval() {
        const startDate = new Date(this.epochYear, this.epochMonth, this.epochDate)
        startDate.setSeconds(this.dateInSecs)

        const interval = setInterval(() => {
            let now = new Date()
            now = this.changeTimezone(now).getTime()
            const distance = startDate - now

            const weeks = Math.floor(
                distance / (this.miliseconds * this.seconds * this.minutes * this.hours * this.days),
            )
            const days = Math.floor(
                (distance % (this.miliseconds * this.seconds * this.minutes * this.hours * this.days)) /
                    (this.miliseconds * this.seconds * this.minutes * this.hours),
            )
            const hours = Math.floor(
                (distance % (this.miliseconds * this.seconds * this.minutes * this.hours)) /
                    (this.miliseconds * this.seconds * this.minutes),
            )
            const minutes = Math.floor(
                (distance % (this.miliseconds * this.seconds * this.minutes)) / (this.miliseconds * this.seconds),
            )

            this.weeksContainer.textContent = weeks > 0 ? weeks : 0
            this.daysContainer.textContent = days > 0 ? days : 0
            this.hoursContainer.textContent = hours > 0 ? hours : 0
            this.minutesContainer.textContent = minutes > 0 ? minutes : 0

            if (distance < 0) {
                clearInterval(interval)
            }
        }, this.timeout)
    }

    changeTimezone(date) {
        const newDate = new Date(date.toLocaleString('en-US', { timeZone: 'America/New_York' }))
        const diffBetweenZones = date.getTime() - newDate.getTime()

        return new Date(date.getTime() - diffBetweenZones)
    }
}

export default Countdown
