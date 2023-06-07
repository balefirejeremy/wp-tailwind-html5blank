const theme = require('./theme.json');
/** @type {import('tailwindcss').Config} */

module.exports = {
    darkMode: 'class',
    content: [
        './*.php',
        './**/*.php',
        './resources/css/*.css',
    ],
    theme: {
        container: {
        },
        extend: {

        }
    },
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
        require('@tailwindcss/aspect-ratio'),
    ]
};
