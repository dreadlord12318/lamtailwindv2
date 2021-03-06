module.exports = {
  content: [
    // Example content paths...
    './resources/views/**/*.blade.php',
    './resources/views/blogs/*.blade.php',
    './resources/views/posts/*.blade.php',
    './resources/css/**/*.css',
    './resources/js/**/*.vue',
    "./node_modules/flowbite/**/*.js",
    
  ],
  theme: {
    extend: {
      boxShadow: {
        '3xl': '6px 6px 3px -1px rgb(137, 132, 132, 58%)',
      },
      screens: {
        'xs': '320px',
      },
      fontFamily:{
        'concoursec6': ['Concourse C6'],
        'concoursec3': ['Concourse C3'],
        'copy': ['Valkyrie T3'],
        'copy2': ['Valkyrie T4'],
        'concourset3': ['Concourse T3'],
        'concourset4': ['Concourse T4'],
        'concourset7': ['Concourse T7'],
        'concourset6': ['Concourse T6'],
      },
      colors: {
        lambright: {
          '50': '#1F2937',
          '100': '#a7c9ff',
          '200': '#79a5eb',
          '300': '#6698e8',
          '400': '#4a85e4',
          '500':'#1b6ef6',
          '600':'#085ce5',
          '700':'#0854D0',
          '800': '#0749b4',
          '900': '053b92',
        },
        lamblue: {
            '50': '#e3edfd',
            '100': '#e2edfd',
            '200': '#79a5eb',
            '300': '#729fe8',
            '400':'#528be7',
            '500':'#2166d6',
            '600':'#1152bb',
            '700':'#0f47a1',
            '800': '#0e3d89',
            '900': '#312e81',
        },
        newgrowth: {
          '50': '#ebf9ba',
          '100': '#CAE275',
          '200': '#bcd959',
          '300': '#a6cc25',
          '400':'#9cc510',
          '500':'#88ae06',
          '600':'#7a9c06',
          '700':'#6c8a03',
          '800': '#5c7604',
          '900': '#475b03',
      },
      newcolor: {
        '50': '#111827',
        '100': '#1F2937',
        '200': '#6B7280',
        '300': '#9BBF20',
        '400' : '#9CA3AF',
        '500' : '#4B5563',
        '600' : '#ffffff',
        '700' : '#FCFDFF',
        '800' : '#374151',
      }
      },
    },
   
  },
  plugins: [
    require('@tailwindcss/forms'),
    require('@tailwindcss/typography'),
    require('@tailwindcss/aspect-ratio'),
    require('tailwindcss-plugins/pagination'),
    require('flowbite/plugin'),
  ]
}
