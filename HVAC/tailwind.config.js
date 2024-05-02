/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./dist/**/*.{html,js,php}"],
  theme: {
    extend: {
      colors: {
        primaryColor: "#01314A",
        secondaryColor: "#0d8155",
      },
      backgroundImage: {
        backBtnBg: "linear-gradient(45deg, #272727c2, #767676)",
        pageBg: "linear-gradient(1deg, #5ee96380, #8dff930d)",
      },
    },
  },
  plugins: [],
};
