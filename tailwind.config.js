/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./resources/**/*.css",
        "./resources/**/*.js",
    ],
    theme: {
        extend: {
            fontFamily: {
                poppins: ["Poppins", "sans-serif"],
                caveat: ["Caveat", "cursive"],
            },
            colors: {
                primary: "#069494",
                secondary: "#00FF00",
                tertiary: "#176161",
            },
        },
    },
    plugins: [],
};
