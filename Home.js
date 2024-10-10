const sidebar = document.querySelector('.sidebar');
const mainContent = document.querySelector('.main-content');
const hamburger = document.querySelector('.hamburger');

// Toggle sidebar when hamburger is clicked
hamburger.addEventListener('click', () => {
    sidebar.classList.toggle('show');
    mainContent.classList.toggle('shift');
});

// Expand sidebar when mouse enters
sidebar.addEventListener('mouseenter', () => {
    sidebar.classList.add('expanded');
});

