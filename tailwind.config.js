/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/views/**/*.{blade.php,vue,js}"],
  theme: {
    extend: {
      colors: {
        'bg-basic': 'FAF3F0',
        'bg-navbar' : 'E3F4F4'
      },
    },

  },
  plugins: [],
}

