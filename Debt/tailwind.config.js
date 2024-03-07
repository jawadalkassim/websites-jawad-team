/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./dist/**/*.{html,js}"],
  theme: {
    extend: {
      fontFamily: {
        bodyFont:['Ubuntu']
      },
      colors:{
        primary:"#24624b"
      }
    },
  },
  plugins: [],
}

