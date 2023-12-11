import resolveConfig from 'tailwindcss/resolveConfig'
import tailwindConfig from '../../../tailwind.config.js'

const fullConfig = resolveConfig(tailwindConfig)

class TailwindBreakpoints {
    constructor() {
        this.breakpoints = fullConfig.theme.screens
    }

    parseBreakpoint(value) {
        return parseInt(value.replace('px', ''))
    }
}

export default TailwindBreakpoints
