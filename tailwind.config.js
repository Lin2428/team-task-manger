/** @type {import('tailwindcss').Config} */
module.exports = {
  plugins: [
    require('flowbite/plugin')
  ],
  content: [
    "./templates/**/*.php",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {},
  },
  plugins: [],

  theme: {
    extend: {
      colors: {
        'primary': '#0073ea',
      },
    }
  }
}

