module.exports = {
    content: ['./views/**/*.blade.php', './assets/css/**/*.css'],
    theme: {
        container: {
            center: true,
            padding: {
                DEFAULT: '20px',
                md: '60px',
                lg: '80px',
            },
        },
        fontSize: {
            10: '10px',
            12: '12px',
            14: '14px',
            16: '16px',
            18: '18px',
            20: '20px',
            22: '22px',
            24: '24px',
            28: '28px',
            32: '32px',
            36: '36px',
            40: '40px',
            44: '44px',
            60: '60px',
            80: '80px',
        },
        screens: {
            md: '480px',
            lg: '1024px',
            xl: '1536px',
            ls: { raw: '(max-height: 400px) and (min-width: 600px) and (orientation: landscape)' },
        },
        colors: {
            neutral: {
                light: '#FFFFFF',
                dimmed: '#FFFFFF33',
                dark: '#0E0E0E',
                gray: '#D7DFE4',
                dark62: '#6F757C',
                blue62: '#6C737A', //Card texts, use it as alternative for text-blue1/[0.62] over backgrounds with opacity in order to avoid accessibility issues
            },
            gray6: '#F8F9FA',
            gray4: '#DDE1E4',
            gray3: '#CFCFD1',
            gray2: '#555557',
            gray1: '#404041',
            blue6: '#E5F0FC',
            blue5: '#A1B7CC',
            blue4: '#3276B5',
            blue3: '#447099',
            blue2: '#223D50',
            blue1: '#17212B',
            error: '#FF723F',
            transparent: 'transparent',
            turquoise: {
                DEFAULT: '#2D8185',
                light: '#D0E5E6',
                dark: '#132B2B',
            },
            green: {
                DEFAULT: '#72994E',
                light: '#DCE5D4',
                dark: '#212C1B',
            },
            cherry: {
                DEFAULT: '#9A4665',
                light: '#EED9E0',
                dark: '#2E171F',
            },
            orange: {
                DEFAULT: '#EE6331',
                light: '#FFEFE9',
                dark: '#441E13',
            },
        },
        letterSpacing: {
            wide: '0.03em',
            wider: '0.05em',
        },
        extend: {
            screens: {
                ls: { raw: '(max-height: 400px) and (min-width: 600px) and (orientation: landscape)' },
            },
            fontFamily: {
                'open-sans': ['Open Sans', 'sans-serif'],
                'source-pro': ['Source Code Pro', 'monospace'],
            },
            transitionTimingFunction: {
                'in-out': 'cubic-bezier(0,0,0.58,1)',
            },
            transitionProperty: {
                height: 'max-height',
            },
            boxShadow: {
                focus: '0px 0px 0px 8px rgba(50, 118, 181, 0.2);',
                'focus-white': '0px 0px 0px 8px rgba(255, 255, 255, 0.2);',
                'active-primary-20': 'inset 0px 0px 0px 1px rgba(255, 255, 255, .2);',
                'active-primary-40': 'inset 0px 0px 0px 2px rgba(255, 255, 255, .4);',
                'active-secondary-20': 'inset 0px 0px 0px 1px rgba(68, 112, 153);',
                'active-secondary-40': 'inset 0px 0px 0px 2px rgba(68, 112, 153);',
                'active-secondary-dark-20': 'inset 0px 0px 0px 1px rgba(255, 255, 255);',
                'active-secondary-dark-40': 'inset 0px 0px 0px 2px rgba(255, 255, 255);',
                'secondary-focus': 'inset 0px 0px 0px 1px rgba(68, 112, 153), 0px 0px 0px 8px rgba(50, 118, 181, 0.2);',
                'tertiary-focus': '0px 0px 0px 8px rgba(50, 118, 181, 0.2);',
                'secondary-dark-focus':
                    'inset 0px 0px 0px 1px rgba(255, 255, 255), 0px 0px 0px 8px rgba(255, 255, 255, 0.2);',
                'img-shadow-inset': 'inset 0px 0px 0px 1px rgba(221, 225, 228, 0.6);',
                'select-focus': 'inset 0px 0px 0px 3px rgba(50, 118, 181, 0.25);',
                'focus-nav-link': '0px 0px 0px 6px rgba(255, 255, 255, 0.2)',
                'focus-share-link': '0px 0px 0px 6px rgba(221, 225, 228, 0.6)',
                'focus-accordion': '0px 0px 0px 6px rgba(50, 118, 181, 0.2)',
                modal: '0px 30px 50px rgba(0, 0, 0, 0.25);',
            },
            keyframes: {
                dot: {
                    '0%': { boxShadow: '0 0 0 0 rgba(50, 118, 181, 0.8)' },
                    '70%': { boxShadow: '0 0 0 10px rgba(50, 118, 181, 0)' },
                    '100%': { boxShadow: '0 0 0 0 rgba(50, 118, 181, 0)' },
                },
            },
            animation: {
                pulse: 'dot 2.5s infinite',
            },
        },
    },
    plugins: [
        require('@tailwindcss/line-clamp'),
        function ({ addComponents }) {
            addComponents({
                '.container': {
                    maxWidth: '1440px',
                },
            })
        },
        function ({ addVariant }) {
            addVariant('link', '& > a')
            addVariant('link-p', '& > p > a')
            addVariant('paragraphs', '& > p')
            addVariant('mobile-only', "@media screen and (max-width: theme('screens.md'))" /* eslint-disable-line */)
            addVariant(
                'mobile-tablet-only',
                "@media screen and (max-width: theme('screens.lg'))" /* eslint-disable-line */,
            )
        },
    ],
}
