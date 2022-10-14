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
        '1.5xl': '1.375rem',
        '2.5xl': '1.75rem',
      }
    }
  },
  plugins: [require("@tailwindcss/typography")]
}
