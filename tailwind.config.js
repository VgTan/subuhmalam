/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      clipPath: {
        'triangle': 'polygon(50% 0%, 0% 100%, 100% 100%)',
        'circle': 'circle(50% at 50% 50%)',
        // Add more clip-path shapes as needed
      },
      fontFamily: {
        'belleza': ['belleza'],
        'playfair': ['playfairdisplay'],
        'charmonman': ['charmonman'],
        'lancelot' : ['lancelot'],
        'worksans' : ['worksans'],
        'balo' : ['balobhai'],
        'archivobold' : ['archivobold'],
        'kaushan' : ['kaushan']
      },
    },
  },
  plugins: [],
}

