/** @type {import('tailwindcss').Config} */
export default {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
    ],
    theme: {
        extend: {
          fontFamily: {
            josefin: ['Josefin Sans', 'sans-serif'],
            vintages: ['Vintages', 'sans-serif'],
            trebuchet: ['Trebuchet MS', 'sans-serif'],
          },
          colors: {
            primary: '#4166C9',
            secondary: '#91AAEB',
            lightpurple: '#B8C6F2',
            light: '#E6E6FA',
            dark: '#3C4381',
            
            mainblue: '#4671DE',
            secondaryblue: '#96A6BA',
            lightblue: '#E0E9FF',
            darkblue: '#071D37',
            
            mainred: '#F5456E',
            pink: '#EF7EAC',
            lightred: '#FFA5BA',
            lighterpink: '#FFD8E8',
    
            teal: '#44A89E',
            mintgreen: '#A4DED8',
            lightgreen: '#D3FAF6',
    
            yellow: '#FFCA1D',
            lightyellow: '#F9D079',
            lighteryellow: '#FFEECB',
    
            darkgray: '#333333',
            gray: '#64748B',
          },
        },
      },
      plugins: [],
    }
    
    