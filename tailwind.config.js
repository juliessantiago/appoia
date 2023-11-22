/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    container:{
      padding:{
        default: '15px'
      }
    }, 
    screens: {
      sm: '640px', 
      md: '468px', 
      lg: '960px', 
      xl: '1330px'
    }, 
    extend: {
      colors: {
        primary: '#38bdf8',//azul mais escuro
        secondary:'#7dd3fc', //azul mais claro
        accent: { //cor de destaque
          default: 'c4b5fd',//roxo
          secondary: 'd8b4fe', //lilás
          tertiary: 'f5d0fe', //rosa 
        }
      }, 
      fontFamily: {
        primary: 'LeagueSpartanRegular'
      }, 
      boxShadow: {
        custom1: '0px 2px 40px 0px rgba(0, 0, 0, 0.08)', 
      }, 
      backgroundImage: { //especificar por secção da página
        services: 'url(/resources/img/flores_cabaca.jpg)'
      }
    }

  },
  plugins: [],
}

