// tailwind.config.js
module.exports = {
    purge: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            width: {
                '96': '24rem',
                '100': '30rem',
                '1/8': '14.2857143%',
                '2/7': '28.5714286%',
                '3/7': '42.8571429%',
                '4/7': '57.1428571%',
                '5/7': '71.4285714%',
                '6/7': '85.7142857%',
            }
        },
        spinner: (theme) => ({
            default: {
              color: '#dae1e7', // color you want to make the spinner
              size: '1em', // size of the spinner (used for both width and height)
              border: '2px', // border-width of the spinner (shouldn't be bigger than half the spinner's size)
              speed: '500ms', // the speed at which the spinner should rotate
            },
            // md: {
            //   color: theme('colors.red.500', 'red'),
            //   size: '2em',
            //   border: '2px',
            //   speed: '500ms',
            // },
          }),
    },
    variants: {
        extend: {},
    },
    plugins: [
        require('tailwindcss-spinner')(),
    ],
}
