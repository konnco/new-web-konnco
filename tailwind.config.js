/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./resource/**/*/.tsx"
  ],
  theme: {
    extend: {
      spacing:{
        '70':'70rem',
        '192':'48rem',
        '95':'18rem',
        '384':'96rem',
        '97' : '30rem'
      },
      colors:{
        'cream':'#edf2b1'
      }
    },
    fontFamily:{
      'sans':['Roboto']
    },
    container:{
      center: true
    }
  },
  plugins: [
    require('flowbite/plugin')
  ],
}