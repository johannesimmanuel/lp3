/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./app/Http/Controllers/**/*.php",
  ],
  theme: {
    extend: {
      colors: {
        // Professional Navy Blue Palette
        navy: {
          50: '#f0f6fe',
          100: '#e0effd',
          200: '#b9dcfa',
          300: '#7cbff7',
          400: '#389df2',
          500: '#0e7ee4',
          600: '#0262c3',
          700: '#0353a4',
          800: '#0a192f',
          900: '#07111e',
          950: '#030810',
        },
        // Re-map arb-* utility classes so existing buttons, badges, links become elegant Navy Blue
        arb: {
          50: '#f0f6fe',
          100: '#e0effd',
          200: '#b9dcfa',
          300: '#7cbff7',
          400: '#389df2',
          500: '#0e7ee4',
          600: '#0262c3',
          700: '#0353a4', // Core Royal Navy Blue
          800: '#083c74',
          900: '#0a192f',
          950: '#07111e',
        },
      },
      fontFamily: {
        sans: ['"Plus Jakarta Sans"', 'Inter', 'system-ui', '-apple-system', 'sans-serif'],
        serif: ['"Playfair Display"', '"Source Serif 4"', 'Georgia', 'serif'],
      },
      boxShadow: {
        'subtle': '0 1px 3px 0 rgba(0, 0, 0, 0.05), 0 1px 2px 0 rgba(0, 0, 0, 0.03)',
        'elevated': '0 10px 30px -10px rgba(15, 23, 42, 0.08), 0 4px 6px -2px rgba(15, 23, 42, 0.03)',
        'card': '0 4px 20px -2px rgba(15, 23, 42, 0.06), 0 2px 6px -1px rgba(15, 23, 42, 0.04)',
      }
    },
  },
  plugins: [],
}