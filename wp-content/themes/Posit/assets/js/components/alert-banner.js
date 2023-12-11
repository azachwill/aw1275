const init = () => {
    const body = document.querySelector('body')
    const alertBanner = document.querySelector('#conference-banner')
    if (alertBanner) {
        // Desktop. Check if the banner has been closed and display/hide it accordingly
        if (!localStorage.getItem('closedBanner')) {
            alertBanner.classList.add('active', 'block')
        } else {
            alertBanner.classList.add('inactive', 'hidden')
        }

        // Add has-banner class to related elements
        if (alertBanner.classList.contains('active')) {
            body.classList.add('has-banner')
        }

        document.getElementById('closeBanner').onclick = function () {
            // Tell browser that alertBanner was closed
            localStorage.setItem('closedBanner', 'true')
            // Remove has-banner class from related elements
            body.classList.remove('has-banner')
            alertBanner.remove()
            return false
        }
    }
}

export default init
