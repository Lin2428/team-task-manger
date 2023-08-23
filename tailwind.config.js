/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./templates/**/*.php"
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

