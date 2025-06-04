/** @type {import('tailwindcss').Config} */
export default {
    content: [
      './resources/**/*.blade.php',
      './resources/**/*.js',
      './resources/**/*.vue',
      './vendor/filament/**/*.blade.php',
    ],
    theme: {
      extend: {
        colors: {
          test: '#1E40AF', 
        },
      },
    },
    plugins: [],
  }