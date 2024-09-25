import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans], 
            },
            colors: {
                scampi: {
                  '50': '#f4f5fa',
                  '100': '#e6e8f3',
                  '200': '#d2d5eb',
                  '300': '#b3b9dd',
                  '400': '#8e95cc',
                  '500': '#7377be',
                  '600': '#5e5cad',
                  '700': '#5a55a0',
                  '800': '#504a83',
                  '900': '#423f69',
                  '950': '#2b2942',
                },
              },
        },
    },

    plugins: [
        forms,
        require('daisyui'),
    ],
    daisyui: {
        themes: [
          "light",
          "dark",
          "cupcake",
          "bumblebee",
          "emerald",
          "corporate",
          "synthwave",
          "retro",
          "cyberpunk",
          "valentine",
          "halloween",
          "garden",
          "forest",
          "aqua",
          "lofi",
          "pastel",
          "fantasy",
    
        ]
      },
};
