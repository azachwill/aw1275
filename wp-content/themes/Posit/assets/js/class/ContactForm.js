import 'what-input'
import { gsap } from 'gsap'
import BackTop from './BackTop'
import CustomEase from 'gsap/CustomEase'
import resolveConfig from 'tailwindcss/resolveConfig'
import tailwindConfig from '../../../tailwind.config'

gsap.registerPlugin(CustomEase)

const fullConfig = resolveConfig(tailwindConfig)

class ContactForm {
    constructor() {
        this.backTop = new BackTop()
        this.breakpoints = fullConfig.theme.screens
        this.container = document.querySelector('#contact-form')
        this.mailFormat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/
    }

    init() {
        this.animateContainer()
        this.validateInputs()
        this.validateTypedInput()
        this.addInputFocus()
    }

    animateContainer() {
        CustomEase.create('expand', '0, 0.24, 0.05, 1.01')

        gsap.timeline({
            delay: 0.3,
        }).fromTo(
            this.container,
            {
                scaleX: 0.9,
                ease: 'expand',
                duration: 0.4,
            },
            {
                scaleX: 1,
            },
        )
    }

    validateInputs() {
        this.btnSubmit = document.querySelector('.mktoButton')
        this.btnSubmit.textContent = 'Submit'
        this.input = document.querySelector('.mktoEmailField')
        this.input.placeholder = 'email'
        this.cbPrivacy = document.querySelector('#privacyPolicyRead')
        this.fields = document.querySelectorAll('.mktoFieldDescriptor.mktoFormCol')

        this.btnSubmit.addEventListener('click', () => {
            this.msgErrors = document.querySelectorAll('.input-error-form')

            if (this.input.value.trim().match(this.mailFormat)) {
                this.input.classList.remove('invalid')
                if (this.validateErrorExists(0)) {
                    this.msgErrors[0].classList.remove('invalid')
                }
            } else {
                this.input.classList.add('invalid')
                this.validateErrorExists(0) ? this.msgErrors[0].classList.add('invalid') : this.createError(0)
            }

            if (this.cbPrivacy.checked) {
                if (this.validateErrorExists(1)) {
                    this.msgErrors[1].classList.remove('invalid')
                }
            } else {
                this.validateErrorExists(1) ? this.msgErrors[1].classList.add('invalid') : this.createError(1)
            }
        })
    }

    validateTypedInput() {
        this.input.addEventListener('mouseout', () => {
            this.removeFocus()
            this.backTop.showButton()
            this.input.value.trim().length ? this.input.classList.add('typed') : this.input.classList.remove('typed')
        })
    }

    parseBreakpoint(value) {
        return parseInt(value.replace('px', ''))
    }

    addInputFocus() {
        this.contactForm = document.querySelector('#signup-form')
        this.fullpage = document.querySelector('#fullpage')

        this.input.addEventListener('blur', () => {
            this.removeFocus()
            this.backTop.showButton()
        })

        this.input.addEventListener('focus', () => {
            if (window.innerWidth <= this.parseBreakpoint(this.breakpoints.md)) {
                this.backTop.hideButton()
            }
            this.fullpage.classList.add('focus')
            this.contactForm.classList.add('focus')
        })
    }

    removeInputBlur() {
        if (this.input) this.input.blur()
    }

    removeFocus() {
        this.fullpage.classList.remove('focus')
        this.contactForm.classList.remove('focus')
    }

    validateErrorExists(index) {
        return typeof this.msgErrors[index] !== 'undefined' && this.msgErrors[index] !== null
    }

    createError(index) {
        this.fillColor = index === 0 ? 'white' : '#CFCFD1'
        this.tagClass = index === 0 ? 'input-err' : 'checkbox-error'

        this.tag = document.createElement('p')
        this.tag.classList.add('input-error-form', 'invalid')
        this.tag.classList.add(this.tagClass)
        this.textMsg = document.createTextNode(index === 0 ? 'Enter a valid e-mail' : 'This field is required')

        this.tag.appendChild(this.createIconError())
        this.tag.appendChild(this.textMsg)
        this.fields[index].appendChild(this.tag)
    }

    createIconError() {
        this.iconSvg = document.createElementNS('http://www.w3.org/2000/svg', 'svg')
        this.iconPath = document.createElementNS('http://www.w3.org/2000/svg', 'path')
        this.iconSvg.setAttribute('fill', this.fillColor)
        this.iconSvg.setAttribute('width', '15')
        this.iconSvg.setAttribute('height', '14')
        this.iconSvg.setAttribute('viewBox', '0 0 15 14')
        this.iconPath.setAttribute(
            'd',
            'M7.5 0C3.65 0 0.5 3.15 0.5 7C0.5 10.85 3.65 14 7.5 14C11.35 14 14.5 10.85 14.5 7C14.5 3.15 11.35 0 7.5 0ZM6.95 3H8.05V8.5H6.95V3ZM7.5 11.5C7.1 11.5 6.75 11.15 6.75 10.75C6.75 10.35 7.1 10 7.5 10C7.9 10 8.25 10.35 8.25 10.75C8.25 11.15 7.9 11.5 7.5 11.5Z',
        )
        this.iconSvg.appendChild(this.iconPath)
        this.iconSvg.classList.add('icon-error')
        return this.iconSvg
    }
}

export default ContactForm
