/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./src/**/*.{html,js,php}"
  ],
  theme: {
    extend: {
      colors: {
        nav: '#222222',
        back: '#161513',
        laranjaGrad: '#FF8660',
        azulGrad: '#5BADFF',
        exp: '#8491A0',
        footer: '#191919'
      },
      fontFamily: {
        poppins: [
          "Poppins", "sans-serif"
        ]
      }
    },
  },
  plugins: [],
}

