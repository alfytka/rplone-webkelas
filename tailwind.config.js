/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
    './node_modules/flowbite/**/*.js'
  ],
  darkMode: 'class',
  theme: {
    extend: {
      fontFamily: {
        inter: ['Inter'],
        figtree: ['Figtree']
      },
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}
