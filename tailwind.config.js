/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            maxWidth: {
                "8xl": "1440px"
            },
        },
    },
    plugins: [
        require('flowbite/plugin')
    ],
}