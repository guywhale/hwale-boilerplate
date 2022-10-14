const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
  content: ["./**/*.php", "./src/**/*.js"],
  theme: {
    container: {
      center: true,
      padding: {
        DEFAULT: '1rem',
      }
    },
    extend: {
      colors: {
        'black': {
          DEFAULT: '#1A1A1A',
        },
        'grey': {
          DEFAULT: '#F2F2F2',
          'dark': '#707070',
          'light': '#EDEDED',
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
        '1.5xl': '1.375rem',
      }
    }
  },
  plugins: [require("@tailwindcss/typography")]
}
