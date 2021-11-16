const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend:{
            screens: {
                'xs': '480px',
            },

        },

        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            fontSize:{
                'xxs':'.65rem',

            },
            backgroundImage: theme => ({

                'main': "url('/storage/images/background3.jpg')",
                'github':"url('/storage/images/GitHub-Mark-32px.png')",
            }),
            inset: {
                '33':'132px',
                '3':'12px',
            },
            width: {
                '13':'52px',
                '39':'156px',
                '97':'800px'
            },
            height:{
                '13':'52px',
            },

        },

    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
