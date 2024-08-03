/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './**/*.php', // All PHP files in the project
        './**/*.html',
        './views/*.php',
        './www/js/*.js',
    ],
    theme: {
        extend: {
            fontFamily: {
                azonix: ['Azonix', 'sans-serif'],
                akony: ['Akony', 'sans-serif'],
            },

        },
    },
    plugins: [],
};