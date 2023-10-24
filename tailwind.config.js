/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                "primary": "#000000",
                "secondary": "#FAA819",
                "alternative": {
                    DEFAULT: "#FDD561",
                    "lighter": "#F7F5EF",
                    "darker": "#FFDD5C",
                },
            }
        }
    },
    plugins: [],
    important: true,
}

