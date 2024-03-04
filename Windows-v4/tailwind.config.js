/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./dist/**/*.{html,js}"],
  theme: {
    extend: {
      backgroundImage:{
        'hero':"url('./img/hero3.jpg')"
      },
      colors:{
        primaryColor:'#00335E',
        secondaryColor:'#0677cc'
      }
    },
  },
  plugins: [],
}

