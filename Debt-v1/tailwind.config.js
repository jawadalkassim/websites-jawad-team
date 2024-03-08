/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./dist/**/*.{html,js}"],
  theme: {
    extend: {
      fontFamily: {
        bodyFont:['Poppins']
      },
      colors:{
        primary:"#176B87",
        secondary:"#3D3B40"
      }
    },
  },
  plugins: [],
}

