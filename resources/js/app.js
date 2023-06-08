import './bootstrap';

// Get the elements
const dropupBtn = document.querySelector('.dropup-btn');
const dropupContent = document.querySelector('.dropup-content');

// Toggle drop-up content visibility
dropupBtn.addEventListener('click', function () {
    dropupContent.style.display = dropupContent.style.display === 'block' ? 'none' : 'block';
});

