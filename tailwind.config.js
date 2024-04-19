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
                customGreen: "#ADC178",
                customLightGreen: "#DDE5B6",
                customBg: "#F0EAD2",
                customBrown: "#6C584C",
            },
        },
    },
    plugins: [],
};
