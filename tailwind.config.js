/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",

  ],
  theme: {
    extend: {
        fontFamily: {
            franklin: ['"Franklin Gothic Book"', 'sans-serif'],
          },
    },
  },
  plugins: [

],
}

