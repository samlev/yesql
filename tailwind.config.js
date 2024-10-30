import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            gridTemplateRows: {
                'title-body': 'minmax(fit-content, 9rem) 1fr'
            },
            keyframes: {
                wiggle: {
                    '0%, 100%': { transform: 'rotate(-10deg)' },
                    '50%': { transform: 'rotate(10deg)' },
                },
                rainbow: {
                    '0%': { color: '#ff0000' },
                    '20%': { color: '#ff8000' },
                    '40%': { color: '#ffff00' },
                    '60%': { color: '#00ff00' },
                    '80%': { color: '#0000ff' },
                    '100%': { color: '#ff0000' },
                }
            },
            animation: {
                wiggle: 'wiggle 0.5s ease-in-out infinite',
                rainbow: 'rainbow 2s linear infinite'
            }
        },
    },
    darkMode: 'selector',
    plugins: [],
};
