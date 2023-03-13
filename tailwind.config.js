/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  darkMode: false,
  theme: {
    extend: {
      fontFamily: {
        barlow: "'Barlow', sans-serif",
        plusjakartasans: "font-family: 'Plus Jakarta Sans', sans-serif",
        opensans: "font-family: 'Open Sans', sans-serif"
      },
      colors: {
        'black-252525': '#252525',
        'black-494949': '#494949',
        'white-1e1e1e': '#1E1E1E',
        'green-d5ff40': '#D5FF40',
        'grey-b5b5b5': '#B5B5B5',
        'blue-0c8ce9': '#0C8CE9',
        'white-fafafa': '#FAFAFA'
      },
      height: {
        '940': '940px',
        '516': '516px',
        '148': '148px',
        '1613': '1613px',
        '452': '452px',
        '1019': '1019px',
        '925': '925px',
        '813': '813px',
        '485': '485px'
      },
      width: {
        '1440': '1440px',
        '1328': '1328px',
        '677': '677px',
        '640': '640px',
        '450': '450px',
        '585': '585px',
        '687': '687px',
        '640': '640px',
        '630': '640px'
      }
    },
  },
  plugins: [],
}
