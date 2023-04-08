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
      backgroundColor: ['active'],
      rotate: {
        '45': '45deg'
      },
      screens: {
        'sm': '640px',
        'md': '768px',
        'lg': '1024px',
        'xl': '1280px',
        '2xl': '1440px',
        '3xl': '1536px',
        '4xl': '1920px'
      },
      spacing: {
        '1px': '1px',
        '2px': '2px',
        '3px': '3px',
        '4px': '4px',
        '5px': '5px',
        '6px': '6px',
        '7px': '7px',
        '8px': '8px',
        '9px': '9px',
        '10px': '10px',
        '16px': '16px',
        '20px': '20px',
        '24px': '24px',
        '32px': '32px',
        '40px': '40px',
        '48px': '48px',
        '56px': '56px',
        '64px': '64px',
        '72px': '72px',
        '80px': '80px',
        '88px': '88px',
        '96px': '96px'
      },
      fontFamily: {
        barlow: "'Barlow', sans-serif",
        plusjakartasans: "font-family: 'Plus Jakarta Sans', sans-serif",
        opensans: "font-family: 'Open Sans', sans-serif"
      },
      fontSize: {
        '5xl': ['3.052rem', {
          lineHeight: 1,
        }],
        '7.5xl': ['5.000rem', {
          lineHeight: 1,
        }],
        '9.5xl': ['9.500rem', {
          lineHeight: 1,
        }],
        '10xl': ['10rem', {
          lineHeight: 1,
        }],
        '11xl': ['12.500rem', {
          lineHeight: 1,
        }]
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
        '512': '512px',
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
        '635': '635px',
        '630': '630px',
        '960': '960px',
        '1080': '1080px'
      }
    },
  },
  plugins: [],
}
