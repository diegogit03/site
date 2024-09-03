/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {},
        colors: {
            primary: '#FF473C',
            secondary: 'rgba(255, 255, 255, 0.4)',
            dark: '#101010',
            'dark-secondary': '#1A1A1A',
            divisor: '#282929',
            white: '#FFFFFF'
        }
    },
    plugins: [],
};
