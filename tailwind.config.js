/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js", // Penting untuk modal Flowbite
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ["Inter", "sans-serif"],
            },
            colors: {
                "dark-bg": "#111111",
                "dark-card": "#181818",
                "text-light": "#E5E5E5",
                "text-muted": "#A3A3A3",
                "accent-lime": "#BEF264",
            },
        },
    },
    plugins: [
        require("flowbite/plugin"), // Penting untuk modal Flowbite
    ],
};
