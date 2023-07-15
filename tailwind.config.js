/** @type {import('tailwindcss').Config} */
const { colors } = require('laravel-mix/src/Log');
const defaultTheme = require('tailwindcss/defaultTheme');
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    'node_modules/preline/dist/*.js',
  ],
  theme: {
    extend: {
      fontFamily: {
        // work sans
        'work-sans': ["Work Sans", ...defaultTheme.fontFamily.sans],
        // merriweather sans
        'merriweather-sans': ["Merriweather Sans", ...defaultTheme.fontFamily.sans],
      },
      colors: {
        'color-blue-1' : '#3FD2C7',
        'color-blue-2' : '#99DDFF',
        'color-blue-3' : '#00458B',
        'color-blue-4' : '#2F86C5',
        'color-blue-5' : '#64B2D4',
        'color-blue-6' : '#2C7172',
        'color-blue-7' : '#144C74',
        'color-blue-8' : '#CFEFFF',
      },
    },
  },
  plugins: [
    require('preline/plugin'),
    require('@tailwindcss/forms'),
  ],
}

