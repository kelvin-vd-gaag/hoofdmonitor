// tailwind.config.js
export default {
    content: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
        './resources/**/*.css',
    ],
    theme: {
        extend: {
            colors: {
                limegreen: '#DBFF4A',
            },
        },
    },
    plugins: [],
    safelist: [
        // Voeg hier alle classes toe die je in je x-transition attributen gebruikt
        'transition-all',
        'ease-in-out',
        'duration-300',
        'opacity-0',
        'opacity-100',
        'max-h-0',
        'max-h-xl',
        // Voeg hier meer classes toe indien nodig
    ],
}
