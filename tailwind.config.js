const theme = require('./theme.json');
const tailpress = require("@jeffreyvr/tailwindcss-tailpress");

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './*.php',
        './**/*.php',
        './resources/css/*.css',
        './resources/js/*.js',
        './safelist.txt'
    ],
    theme: {
        container: {
            padding: {
                DEFAULT: '1rem',
                sm: '2rem',
                lg: '0rem'
            },
        },
        extend: {
            // colors: tailpress.colorMapper(tailpress.theme('settings.color.palette', theme)),
            colors: {
                mrct: {
                    'white': '#fff',
                    'black': '#000',
                    navy: {
                        'light': '#003052',
                        'dark': '#00233B'
                    },
                    lilac: {
                        'light': '#7879B9',
                        'dark': '#6869A1'
                    },
                    ochre: {
                        'light': '#FEBE11',
                        'dark': '#E8A33B'
                    },
                    orange: '#F15D29'
                },
            },
            spacing: {
                page: '1440px',
                blog: '980px'
            },
            aspectRatio: {
                '4/3': '4 /3',
                '9/6': '9 /6'
            },
            // fontSize: tailpress.fontSizeMapper(tailpress.theme('settings.typography.fontSizes', theme))
            fontFamily: {
                sans: ['Avenir Next', 'sans-serif']
            }
        },
        screens: {
            'xs': '480px',
            'sm': '600px',
            'md': '782px',
            'lg': tailpress.theme('settings.layout.contentSize', theme),
            'xl': tailpress.theme('settings.layout.wideSize', theme),
            '2xl': '1440px'
        }
    },
    plugins: [
        tailpress.tailwind
    ]
};
