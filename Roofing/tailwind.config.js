/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./dist/**/*.{html,js,php}"],
  theme: {
    extend: {
      colors:{
        primaryColor:'#01314A',
        secondaryColor:'rgb(232 95 60)'
      },
    },
  },
  plugins: [],
}

