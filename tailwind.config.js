/** @type {import('tailwindcss').Config} */

module.exports = {
    content: [
        './template-parts/**/*.php',
        './page.php',
        './header.php',
        './footer.php',
        './front-page.php',
        './page-portfolio.php',
        './page-about.php',
        './page.php',
        './single.php',
        './404.php',
    ],
    theme: {
        extend: {
            fontFamily: {
                heading: ['Sedgwick Ave Display', 'cursive'],
                text: ['Heebo', 'cursive'],
            },
            colors: {
                'light-primary': '#19BC9B',
                'light-secondry': '#2C3D4F',
            },
        },
    },
    plugins: [
        require('@tailwindcss/typography'), // Include this line if not already present
    ],
};
