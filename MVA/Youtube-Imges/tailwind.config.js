/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js}"],
  theme: {
    extend: {
      fontFamily: {
        Montserrat: ["Montserrat", "sans-serif"],
        Lato: ["Lato", "sans-serif"],
      },

      width: {
        contanerxl: "1170px",
        contanerlg: "832px",
      },
      colors: {
        primary: "#5F8DA7",
        secondary: "#FEFEFE",
        theard: "#E93D3D",
        fourth: "#001A35",
        five: "#13384FFF",
      },
      boxShadow: {
        buttonShadow: "0 1px 5px rgba(0, 0, 0, .4);",
        cardShadow: "0 1px 5px rgba(0,0,0,.2);",
        "form-shadow": "0px 0px 10px 0px #0000009c",
      },
      keyframes: {
        "slide-prev": {
          "0%": {
            transform: "translateX(-40%);",
            opacity: 0,
          },
          "100%": {
            transform: "translateX(0);",
            opacity: 1,
          },
        },

        "slide-next": {
          "0%": {
            transform: "translateX(40%);",
            opacity: 0,
          },
          "100%": {
            transform: "translateX(0)",
            opacity: 1,
          },
        },

        arrowAnimateBack: {
          " 0%": {
            transform: "translateX(0) rotate(180deg)",
          },
          "25%": {
            transform: "translateX(4px) rotate(180deg) ",
          },
          "50%": {
            transform: "translateX(0px) rotate(180deg) ",
          },
          "75%": {
            transform: "translateX(-4px) rotate(180deg) ",
          },
          "100%": {
            transform: " translateX(0) rotate(180deg)",
          },
        },

        arrowAnimateNext: {
          " 0%": {
            transform: "translateX(0) ",
          },
          "25%": {
            transform: "translateX(4px)  ",
          },
          "50%": {
            transform: "translateX(0px)  ",
          },
          "75%": {
            transform: "translateX(-4px)  ",
          },
          "100%": {
            transform: " translateX(0) ",
          },
        },
      },

      animation: {
        "slide-next": "slide-next 250ms  linear ",
        "slide-prev": "slide-prev 250ms  linear ",
        arrowAnimateBack: "arrowAnimateBack 1000ms linear infinite ",
        arrowAnimateNext: "arrowAnimateNext 1000ms linear infinite ",
      },
    },
  },

  plugins: [],
};
