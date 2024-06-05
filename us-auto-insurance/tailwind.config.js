/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.{php,html,js}"],
  theme: {
    extend: {
      colors: {
        'custom-blue' : '#4ca9ee',
        'custom-dark-blue' : '#2984c7',
        'custom-dark-green' : '#238878',
        'custom-light-green' : '#5ecd81',
        'custom-gray' : '#b2b7bb',
      },
    },
  },
  plugins: [],
}

