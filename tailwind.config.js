module.exports = {
  content: ["./**/*.php", "./src/**/*.js"],
  theme: {
    container: {
      center: true,
      padding: {
        DEFAULT: '1rem',
      }
    },
  },
  plugins: [require("@tailwindcss/typography")]
}
