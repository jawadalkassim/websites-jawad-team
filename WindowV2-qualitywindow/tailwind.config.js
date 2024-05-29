/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js}"],
  theme: {
    extend: {
      fontFamily: {
        Montserrat: ["Montserrat", "sans-serif"],
        Lato: ["Lato", "sans-serif"],
      },
       backgroundImage:{
        bgCover: 'url(./imgs/background.webp)',
       },
      width: {
        containerXl: "1170px",
        containerLg: "700px",
      },
      colors: {
        primary: "#F26924",
        secondary: "#52B057",
        third: "#4c4c4c",
        fourth: "#fff",
      },
    },
  },

  plugins: [],
};
