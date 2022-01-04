const _ = require("lodash");
const theme = require('./theme.json');
const tailpress = require("@jeffreyvr/tailwindcss-tailpress");

module.exports = {
    mode: 'jit',
    content: [
        './*/*.php',
        './**/*.php',
        './resources/css/*.css',
        './resources/js/*.js',
        './safelist.txt'
    ],
    theme: {
        boxShadow: {
            jc: '0 0 15px rgba(0, 0, 0, 0.1)',
            jcHover: '0 8px 30px -5px rgba(0, 0, 0, 0.2)',
            services: '0 0 30px rgba(0, 0, 0, 0.08)',
            jcMenuScroll: '0 2px 2px -2px rgba(0,0,0,.2);', 
        },
        container: {
            padding: {
                DEFAULT: '1rem',
                sm: '2rem',
                lg: '0rem'
            },
            center: true,
        },
        extend: {
            colors: tailpress.colorMapper(tailpress.theme('settings.color.palette', theme)),
            fontFamily: {
                jcLogo: ['Bebas Neue', 'cursive'],
                jcHeading: ['Poppins', 'sans-serif'],
                jcSubHeading: ['Roboto', 'sans-serif']
            },
            lineHeight: {
                '11': '2.75rem',
                '12': '3rem',
            },
            height: {
                '375': '375px',
            },
        },
        screens: {
            'sm': '640px',
            'md': '768px',
            'lg': '1024px',
            'xl': tailpress.theme('settings.layout.wideSize', theme),
            '2xl': tailpress.theme('settings.layout.xlSize', theme)
        }
    },
    plugins: [
        tailpress.tailwind,
        require('@tailwindcss/typography'),
        require('@tailwindcss/forms')
    ]
};
