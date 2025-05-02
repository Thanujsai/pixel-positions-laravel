// tailwind.config.js
export default {
    content: [
      './resources/**/*.blade.php',
      './resources/**/*.js',
      './resources/**/*.vue', // if using Vue or Inertia
    ],
    theme: {
      extend: {
        colors: {
            danger : "red",
            white: '#fff',
        },
        fontFamily: {
          sans: ['Instrument Sans', 'ui-sans-serif', 'system-ui', 'sans-serif'],
          hankenGrotesk: ['"Hanken Grotesk"', "sans-serif"],
        },
      },
    },
    plugins: [],
  };
  