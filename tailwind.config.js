/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    'node_modules/preline/dist/*.js',

  ],
  theme: {
    extend: {
        fontFamily: {
            franklin: ['"Franklin Gothic Book"', 'sans-serif'],
          },
         

    },
  },
  plugins: [
    require('preline/plugin'),

],
}

