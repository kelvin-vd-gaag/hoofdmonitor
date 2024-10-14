export default {
    content: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
        './resources/**/*.css',  // Zorg ervoor dat alle css-bestanden worden meegenomen
    ],
    theme: {
        extend: {
            colors: {
                limegreen: '#DBFF4A',
            },
        },
    },
    plugins: [],
}
