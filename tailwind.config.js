const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: ['./storage/framework/views/*.php', './resources/views/**/*.blade.php'],

    theme: {
        extend: {
            fontFamily: {
                'sans': ['"Inter"', '"Lato"', ...defaultTheme.fontFamily.sans]
            },
            colors: {
                'white-1': '#FFFFFF',
                'l-blue-1': '#61B9E2',
                'l-blue-2': '#0093D2',
                'l-blue-3': '#4288A9',
                'l-blue-4': '#007EB4',
                'l-blue-5': '#006996',
                'gray-1': '#F0F0F0',
                'gray-2': '#BBBBBB',
                'orange-1': '#F49B6C',
                'orange-2': '#F5A57A',
                'black-1': '#273F47',
            }
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/aspect-ratio')
    ],
};
