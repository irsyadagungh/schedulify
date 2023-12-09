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
      'poppin': ['Poppins', 'sans-serif'],
    },
    colors: {
      'primary' : '#1A202B',
      'card'    : '#222228',
      'secondary' : '#17171A',
      'ternary' : '#2C3748',
      'white'   : '#FFFFFF',
      'blue'    : '#52B7C9',
      'reject'  : '#BF5A5A',
      'done'    : '#5A82BF',
    },
    listStyleImage: {
      loginPic : 'url("./public/assets/images/loginPics.jpg")'
    }
  },
  plugins: [],
}

