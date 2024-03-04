/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./dist/**/*.{html,js}"],
  theme: {
    extend: {
      fontFamily: {
        bodyFont:['Ubuntu']
      },
      backgroundImage: {
        'hero': "url('./img/hero.jpg')",
        'table':"url('./img/room.jpg')"
      },
      colors:{
        primaryColor: '#21B659',
        secondaryColor:'#444'
      }
    },
  },
  plugins: [],
}

