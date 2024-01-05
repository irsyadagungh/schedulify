/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    'node_modules/preline/dist/*.js',
  ],
  theme: {
    extend: {},
    fontFamily: {
      'cursive' : ['Pacifico'],
      'inter' : ['Inter'],
      'poppin': ['Poppins', 'sans-serif'],
      'inter' : ['Inter', 'sans-serif'],
    },
    colors: {
      'primary' : '#1A202B',
      'card'    : '#222228',
      'secondary' : '#17171A',
      'ternary' : '#2C3748',
      'white'   : '#FFFFFF',
      'blue'    : '#336AAA',
      'reject'  : '#BF5A5A',
      'done'    : '#5A82BF',
      'transparent' : '#00000000',
      'Request' : '#BF965A',
      'upload'  : '#2D2D2C',
      'black'  : '#000000',
      'onProgress' : '#353f4f',
      'rejected' : '#432531',
      'rejectedText' : '#e54243',
      'dones' : '#1e305e',
      'text-dones' : '#3878e3',
      'red'   : '#643333',
      'green' : '#466433',
      'yellow' : '#645C33',
      'join'    : '#313139',
      'redLight' : '#AA3333',

    },
    listStyleImage: {
      loginPic : 'url("./public/assets/images/loginPics.jpg")'
    }
  },
  plugins: [
    require('preline/plugin'),
  ],
}

