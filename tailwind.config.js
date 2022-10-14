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
