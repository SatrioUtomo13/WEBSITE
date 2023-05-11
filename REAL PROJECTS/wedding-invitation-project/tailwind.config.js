/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                'abril' : ['Abril Fatface', 'cursive'],
                'sans' : ['Open Sans', 'sans-serif'],
                'serif' : ['Source Serif Pro', 'serif'],
            },
            colors : {
                'primary' : '#54595F',
                'secondary' : '#7A7A7A',
                'bg1' : '#F7F7F7',
            }
        },
    },
    plugins: [],
};
