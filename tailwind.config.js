/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.{php,html,js}"],
  theme: {
    extend: {},
  },
  plugins: [
    require('@tailwindcss/typography'),
  ],
  safelist: [
    'custom-form-input',
    'wpcf7-form',
    'wpcf7-form-control-wrap',
    'wpcf7-response-output',
  ],
}