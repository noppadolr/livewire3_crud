const colors = require('tailwindcss/colors')

module.exports = {
    content: [
        "./src/**/*.{html,js}",
        "node_modules/@frostui/tailwindcss/dist/*.js"
    ],
    darkMode: ['class', '[data-mode="dark"]'],
    theme: {

        container: {
            center: true,
        },

        fontFamily: {
            'base': ['Roboto', 'sans-serif'],
            'heading': ['Karla', 'sans-serif'],
        },

        extend: {
            colors: {
                'primary': '#71b6f9',

                'secondary': '#6c757d',

                'success': '#10c469',

                'warning': '#f9c851',

                'info': '#35b8e0',
                
                'danger': '#ff5b5b',

                'purple': '#5b69bc',

                'pink': '#ff8acc',

                'light': '#f8f9fa',

                'dark': '#323a46',
            },
        },
    },

    plugins: [
        require('@frostui/tailwindcss/plugin'),
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
        require('@tailwindcss/aspect-ratio'),
    ],
}