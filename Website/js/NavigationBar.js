document.addEventListener('DOMContentLoaded', () => {
    const navbar = document.getElementById('navbar');
    const trigger = document.querySelector('.hover-trigger');
    let keepNavVisible = false; // Track if we should keep the nav visible

    // Remove transitions initially to prevent fade effect on load
    navbar.classList.add('no-transition');

    // Check if the nav bar was visible when the page was last loaded
    if (sessionStorage.getItem('navVisible') === 'true') {
        navbar.classList.add('visible');
    }

    // Allow transitions after a short delay, once the page has loaded
    setTimeout(() => {
        navbar.classList.remove('no-transition');
    }, 100); // Adjust delay as needed

    // Add hover functionality to trigger zone to slide the nav in
    trigger.addEventListener('mouseenter', () => {
        if (!keepNavVisible) {
            navbar.classList.add('visible');
            sessionStorage.setItem('navVisible', 'true'); // Keep navbar visible even after refresh
        }
    });

    // Add mouseleave event to hide nav when leaving the nav bar or the trigger zone
    navbar.addEventListener('mouseleave', () => {
        if (!keepNavVisible) {
            navbar.classList.remove('visible');
            sessionStorage.setItem('navVisible', 'false'); // Hide navbar when mouse leaves
        }
    });

    // Add click event to handle when a button or link inside the navbar is clicked
    navbar.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', () => {
            keepNavVisible = true; // Keep the nav visible when a link is clicked
            navbar.classList.add('visible');
            sessionStorage.setItem('navVisible', 'true');
        });
    });

    // Optional: Add a button to allow manual hiding of the navbar, if needed
    document.querySelector('#hideNavButton')?.addEventListener('click', () => {
        keepNavVisible = false; // Reset the flag
        navbar.classList.remove('visible');
        sessionStorage.setItem('navVisible', 'false');
    });
});
