/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./dist/**/*.{html,js}"],
  theme: {
    extend: {
      fontFamily: {
        bodyFont:['Ubuntu']
      },
      colors:{
        primary:"#881a1a",
        secondary:"#2746a6"
      }
    },
  },
  plugins: [],
}

