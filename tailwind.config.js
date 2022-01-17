const colors = require('tailwindcss/colors')
module.exports = {
  purge: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    // './resources/**/*.vue',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      colors: {
        'cyan': colors.cyan,
        'teal': colors.teal,
        'amber': colors.amber,
        'emerald': colors.emerald,
        
      },
      backgroundImage: theme => ({
        'bg-main-img': "url('/images/background.jpg')",
        'login-img': "url('/images/loginimg.jpg')",
        'signup-img': "url('/images/signupimg.jpg')",
        'logo-img': "url('/images/rewardslogotransparent.png')",
        'logo-img1': "url('/images/madlogo1.jpg')",
        'logo-img-transparent': "url('/images/madlogotransparent.png')"
      }),
       fontFamily: {
         'body': 'Montserrat',
       },
      
    },
  },
  variants: {
    scale: ['responsive', 'hover', 'focus', 'active', 'group-hover', 'group-focus'],
    extend: {
      borderStyle: ['hover', 'focus'],
    },
  },
  plugins: [],
}
