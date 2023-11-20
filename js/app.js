const nav = document.querySelector('#navToggle');
const navegation = document.querySelector('#navegation');

nav.addEventListener('click', () => {
    navegation.classList.toggle('hidden');
})