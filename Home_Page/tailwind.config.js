/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./dist/**/*.{html,js,php}"],
  theme: {
    extend: {
      fontFamily:{
        bodyFont:"Poppins"
      },
      colors:{
        primaryColor:'#01314A',
        secondaryColor:'#e85f3c'
      }
    },
  },
  plugins: [],
}


