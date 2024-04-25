/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./dist/**/*.{html,js,php}"],
  theme: {
    extend: {
      colors:{
        primaryColor:'#01314A',
        secondaryColor:'#0d8155'
      },
    },
  },
  plugins: [],
}

