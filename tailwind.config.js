/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {},
    fontFamily: {
      'cursive' : ['Pacifico'],
      'inter' : ['Inter'],
    },
    colors: {
      'primary' : '#1A202B',
      'white'   : '#FFFFFF',
      'blue'    : '#52B7C9',
    },
    listStyleImage: {
      loginPic : 'url("./public/assets/images/loginPics.jpg")'
    }
  },
  plugins: [],
}

