/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./dist/**/*.{html,js,php}"],
  theme: {
    extend: {
      width: {
        contanerxl: "1170px",
        contanerlg: "832px",
      },
      colors: {
        primaryColor: "#01314A",
        secondaryColor: "#0d8155",
      },
      backgroundImage: {
        backBtnBg: "linear-gradient(45deg, #272727c2, #767676)",
        pageBg: "linear-gradient(1deg, #5ee96329, #8dff930d)",
      },
      boxShadow: {
        "3xl": '0 35px 60px -15px rgba(0, 0, 0, 0.3)',
      },
      keyframes: {
        "slide-next": {
          "0%": {
            transform: "translateX(-5%);",
            opacity: 0.5,
          },
          "100%": {
            transform: "translateX(0);",
            opacity: 1,
          },
        },

        "slide-prev": {
          "0%": {
            transform: "translateX(5%);",
            opacity: 0.5,
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
        "slide-next": "slide-next 300ms  linear ",
        "slide-prev": "slide-prev 300ms  linear ",
        arrowAnimateBack: "arrowAnimateBack 1000ms linear infinite ",
        arrowAnimateNext: "arrowAnimateNext 1000ms linear infinite ",
      },
    },
  },

  plugins: [],
};
