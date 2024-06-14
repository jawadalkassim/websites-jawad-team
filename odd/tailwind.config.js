/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js}", "./index.html"],
  theme: {
    extend: {
      textShadow: {
        custom: "1px 1px 1px rgba(0, 0, 0, 0.2)",
      },
      boxShadow: {
        "img-shadow": "0 2px 5px 2px rgba(0,0,0,0.3)",
        "btn-shadow": "0 1px 5px rgba(0,0,0,0.7)",
        "btn-hover-shadow":
          "inset 0 2px 2px 0 rgba(255, 255, 255, 0.22), 0 233px 233px 0 rgba(255, 255, 255, 0.12) inset;",
      },
    },
  },
  plugins: [
    function ({ addUtilities }) {
      const newUtilities = {
        ".text-shadow-custom": {
          textShadow: "1px 1px 1px rgba(0, 0, 0, 0.2)",
        },
      };

      addUtilities(newUtilities, ["responsive", "hover"]);
    },
  ],
};
