/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],

    theme: {
        extend: {
            colors: {
                cafe: {
                    background: '#F0EBE9',
                    primary: '#36A372',
                    dark: '#1F3A33',
                    surface: '#FAF8F7',
                    border: '#DDD6D3',
                    text: '#1A1A1A',
                    softtext: '#5B5B5B',
                    mint: '#DDEFE6',
                    danger: '#C94F4F',
                }
            },

            fontFamily: {
                sans: ['Inter', 'sans-serif'],
            },

            borderRadius: {
                pill: '999px',
                card: '20px',
            },

            boxShadow: {
                soft: '0 0 1px rgba(0,0,0,0.10), 0 4px 12px rgba(0,0,0,0.06)',
                navbar: '0 1px 3px rgba(0,0,0,0.08), 0 2px 6px rgba(0,0,0,0.04)',
                float: '0 8px 20px rgba(0,0,0,0.12)',
            }
        },
    },

    plugins: [],
}