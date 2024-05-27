
const menuToggle = document.querySelector('.menu-toggle');
const nav = document.querySelector('nav');

menuToggle.addEventListener('click', () => {
    nav.classList.toggle('active');
});

const searchBox = document.querySelector('.search-box');
const searchInput = searchBox.querySelector('input[type="text"]');

searchBox.addEventListener('click', () => {
    searchBox.classList.add('active');
    searchInput.focus();
});

document.addEventListener('click', (event) => {
    if (!searchBox.contains(event.target)) {
        searchBox.classList.remove('active');
    }
});

const quantityInput = document.querySelector('.quantity-input');
const quantityMinus = document.querySelector('.quantity-minus');
const quantityPlus = document.querySelector('.quantity-plus');

quantityMinus.addEventListener('click', () => {
    if (quantityInput.value > 1) {
        quantityInput.value = parseInt(quantityInput.value) - 1;
    }
});

quantityPlus.addEventListener('click', () => {
    if (quantityInput.value < 100) {
        quantityInput.value = parseInt(quantityInput.value) + 1;
    }
});


const rangeInput = document.querySelector('.range-input');
const rangeValue = document.querySelector('.range-value');

rangeInput.addEventListener('input', () => {
  rangeValue.textContent = rangeInput.value;
});