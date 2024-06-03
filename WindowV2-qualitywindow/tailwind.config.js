/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js}"],
  theme: {
    extend: {
      fontFamily: {
        Montserrat: ["Montserrat", "sans-serif"],
        Lato: ["Lato", "sans-serif"],
      },
      backgroundImage: {
        bgCover: "url(./imgs/background.webp)",
      },
      width: {
        containerXl: "1170px",
        containerLg: "700px",
      },
      colors: {
        primary: "#F26924",
        secondary: "#55ad5a",
        third: "#4c4c4c",
        fourth: "#fff",
        five: "#555",
        six: "#ccc",
        seven: "#2c3e50",
        eight: "#d0021b",
      },
      boxShadow: {
        inputShadow: "inset 0 1px 2px 2px #eee",
        inputFocus: "0 0 0 .25rem rgba(13, 110, 253, .25)",
        inputShadowError: "0px 0px 4px 1px #e91e63;",
      },

      keyframes: {
        fadeOutBtn: {
          "0%,100%": {
            transform: "scale(1)",
          },
          "50%": {
            transform: "scale(0.991)",
          },
        },
        "slide-next": {
          "0%": {
            transform: "translateX(200%)",
            opacity: 0,
          },
          "100%": {
            transform: "translateX(0)",
            opacity: 1,
          },
        },

        "slide-prev": {
          "0%": {
            transform: "translateX(-200%)",
            opacity: 0,
          },
          "100%": {
            transform: "translateX(0)",
            opacity: 1,
          },
        },
      },

      animation: {
        fadeOutBtn: "fadeOutBtn 200ms ease-in-out forwards",
        "slide-next": "slide-next 500ms  ease-in-out ",
        "slide-prev": "slide-prev 500ms  ease-in-out ",
      },
    },
  },

  plugins: [],
};
