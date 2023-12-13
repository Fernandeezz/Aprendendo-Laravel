/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'Laranja': '#EE8038',
        'CinzaClaro': '#93908d',
        'Cinza': '#5D5D5D',
        'Bege': '#EFE7DA',
        'Azul': '#1F446F',
        'Creme': '#F6F3ED',
      },
      borderRadius: {
        'new': '77px',
      },
      fontFamily: {
        Aileron: 'aileron',
        Garamond: 'EB Garamond',
      },
      spacing: {
        '18': '73px',
      }
    },
  },
  plugins: [],
}