/** @type {import('tailwindcss').Config} */
export default {
  content: ["./resources/views/**/*.blade.php"],
  theme: {
    extend: {
      colors: {
        'ci-red': '#F81A00',
      },
    },
  },
  plugins: [],
}

