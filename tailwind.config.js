const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                pacifico: ['"Pacifico"'],
                montserrat: ['"Montserrat"'],
                comfortaa: ['"Comfortaa"'],
            },
            colors: {
                primary: defaultTheme.colors.indigo,
            },
            zIndex: {
                "-1": "-1",
            },
        },
    },

    variants: {
        opacity: ['responsive', 'hover', 'focus', 'disabled'],
        backgroundColor: ['hover', 'focus', 'dark', 'dark-hover', 'dark-group-hover', 'dark-even', 'dark-odd'],
        borderColor: ['hover', 'focus', 'dark', 'dark-disabled', 'dark-focus', 'dark-focus-within'],
        textColor: ['hover', 'focus', 'dark', 'dark-hover', 'dark-active', 'dark-placeholder'],
    },

    plugins: [
        require('@tailwindcss/ui'),
        require('tailwindcss-dark-mode')()
    ],

};
