document.addEventListener('DOMContentLoaded', () => {
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

            // Collapse sidebar when mouse leaves
            sidebar.addEventListener('mouseleave', () => {
                sidebar.classList.remove('expanded');
            });

            // Test yourself button and start buttons
            const startButtons = document.querySelectorAll('.start-btn');
            startButtons.forEach(button => {
                button.addEventListener('click', () => {
                    alert('Starting course...');
                });
            });

            const testYourselfButton = document.querySelector('.test-yourself-btn');
            testYourselfButton.addEventListener('click', () => {
                window.location.href = 'quiz.php';
            });
        });
