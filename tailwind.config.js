const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    mode: 'jit',
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                'sans': ['ui-sans-serif', 'system-ui',],
                'serif': ['ui-serif', 'Georgia',],
                'mono': ['ui-monospace', 'SFMono-Regular',],
                'display': ['Oswald',],
                'body': ['"Open Sans"',],
               }
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
