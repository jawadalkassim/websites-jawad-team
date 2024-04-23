/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./dist/**/*.{html,js,php}"],
  theme: {
    extend: {
      fontFamily: {
        bodyFont: "Poppins",
      },
      colors: {
        primaryColor: "#01314A",
        secondaryColor: "#e85f3c",
        threedColor: "#fff",
      },
      width: {
        contanerxl: "1170px",
        contanerlg: "832px",
        // contanermd: "750px",
      },
      boxShadow: {
        headerShadow: "0 0 3px 0px white",
        spanNum: "inset 0px 0px 6px #b1a9a9",
        imgeShadow: "0px 0px 10px #ff714c",
        imgeShadowMiddle: "0px 0px 10px #fff",
        cardImgeShadow: "0px 0px 12px 3px #805b35, 0px 0px 4px 1px #ffffff",
      },
      textShadow: {
        headerTextShadow: "1.5px 0px 1px white",
      },
      backgroundImage: {
        showMore:
          "linear-gradient(46deg, rgb(79, 192, 232), rgba(232, 95, 60, 0))",
      },
    },
  },
  plugins: [],
};
