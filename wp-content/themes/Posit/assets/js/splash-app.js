import backTop from './components/back-top-button'
import validateInput from './components/validate-input'
import sectionsAnimation from './components/sections-animation'

function main() {
    backTop()
    validateInput()
    sectionsAnimation()
}

window.addEventListener('DOMContentLoaded', () => {
    main()
})
