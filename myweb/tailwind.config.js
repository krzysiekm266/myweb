
module.exports = {
  purge: [
    './resources/views/**/*.blade.php',
    './resources/css/**/*.css',
  ],
  theme: {
    extend: {}
  },
  variants: {
    extend: {
        border:['hover'],
        borderWidth: ['hover'],
        borderRadius: ['hover'],
        borderColor: ['hover'],
    }
  },
  plugins: [
    require('@tailwindcss/ui'),
    require('@tailwindcss/forms')
  ]
};
