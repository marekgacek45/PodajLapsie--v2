/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js",
    "./resources/**/*.css"
  ],
  theme: {
    extend: {
      screens: {
        'xs': '450px'},
      colors: {
        
        mainColor:{
          100:'#DEF2F1',
          200:'#A2D7D6',
          300:'#74C6C4',
          400:'#54BCBB',
          500:'#3FACAA',
          600:'#359B99',
          700:'#2A8886 ',
          800:'#1E6966',
          900:'#0D4744 ',
        },

        darkBgc:'#1c1c1c'
      },
     
     
    },
  },
  plugins: [
    require('flowbite/plugin'),
    require('@tailwindcss/typography'),
  ],
}

