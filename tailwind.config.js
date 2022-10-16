const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
  content: ["./**/*.php", "./src/**/*.js"],
  theme: {
    container: {
      center: true,
      padding: {
        DEFAULT: '1rem',
        'lg': '0.75rem',
      }
    },
    extend: {
      animation: {
        'swing-right': 'swingRight 600ms ease-in-out infinite alternate',
      },
      colors: {
        'black': {
          DEFAULT: '#1A1A1A',
          'normal': '#000000',
        },
        'grey': {
          DEFAULT: '#EDEDED',
          'dark': '#707070',
          'light': '#F2F2F2',
        },
        'crimson': '#570E22',
        'red': '#D12417',
      },
      fontFamily: {
        'sans': ['Noto Sans', ...defaultTheme.fontFamily.sans],
        'display': ['Noto Sans', 'sans-serif'],
        'body': ['Noto Sans', 'sans-serif'],
      },
      fontSize: {
        'sm+': '0.9375rem',
        '1.5xl': '1.375rem',
        '2.5xl': '1.75rem',
      },
      keyframes: {
        'swingRight': {
          '0%, 100%' : { transform: 'translateX(0)'},
          '100%': { transform: 'translateX(10px)'},
        }
      },
      spacing: {
        '19': '4.75rem',
      },
    }
  },
  plugins: [require("@tailwindcss/typography")]
}
