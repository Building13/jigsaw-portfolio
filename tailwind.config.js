const colors = require('tailwindcss/colors')

module.exports = {
  purge: [
    'source/**/*.blade.php',
    'source/**/*.md',
    'source/**/*.html',
  ],
  darkMode: 'media', // or 'media' or 'class'
  theme: {
    fontFamily: {
      sans: ['pragmatica', 'sans-serif'],
      display: ['pragmatica-extended', 'sans-serif'],
    },
    extend: {
      colors: {
        gray: colors.trueGray,
        orange: colors.orange,
      },
      typography: (theme) => ({
        light: {
          css: [
            {
              color: theme('colors.gray.400'),
              '[class~="lead"]': {
                color: theme('colors.gray.300'),
              },
              a: {
                color: theme('colors.white'),
              },
              strong: {
                color: theme('colors.white'),
              },
              'ol > li::before': {
                color: theme('colors.gray.400'),
              },
              'ul > li::before': {
                backgroundColor: theme('colors.gray.600'),
              },
              hr: {
                borderColor: theme('colors.gray.200'),
              },
              blockquote: {
                color: theme('colors.gray.200'),
                borderLeftColor: theme('colors.gray.600'),
              },
              h1: {
                color: theme('colors.white'),
              },
              h2: {
                color: theme('colors.white'),
              },
              h3: {
                color: theme('colors.white'),
              },
              h4: {
                color: theme('colors.white'),
              },
              'figure figcaption': {
                color: theme('colors.gray.400'),
              },
              code: {
                color: theme('colors.white'),
              },
              'a code': {
                color: theme('colors.white'),
              },
              pre: {
                color: theme('colors.gray.200'),
                backgroundColor: theme('colors.gray.800'),
              },
              thead: {
                color: theme('colors.white'),
                borderBottomColor: theme('colors.gray.400'),
              },
              'tbody tr': {
                borderBottomColor: theme('colors.gray.600'),
              },
            },
          ],
        },
      }),
    },
  },
  variants: {
    extend: {
      transitionProperty: ['hover', 'focus'],
      opacity: ['dark'],
      backgroundOpacity: ['dark'],
      order: ['odd'],
      backgroundColor: ['odd', 'dark'],
      rotate: ['odd'],
      typography: ['dark'],
    },
    display: ['responsive', 'dark'],
  },
  plugins: [
    require('@tailwindcss/aspect-ratio'),
    require('tailwindcss-padding-safe')(),
    require('@tailwindcss/typography'),
  ],
};
