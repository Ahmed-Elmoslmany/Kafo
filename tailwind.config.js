/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            backgroundImage: {
                "download-gradient":
                    "linear-gradient(to top left , #FC4A1C 60%, #E24118 100%)",
                "hero-gradient":
                    "linear-gradient(to top left, #586066 20%, #2C3033 10%, #FC4A1C 80%)",
            },
        },
    },
    plugins: [],
};
