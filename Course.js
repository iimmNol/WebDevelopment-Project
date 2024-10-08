document.querySelectorAll('.course-title').forEach(title => {
    title.addEventListener('click', () => {
        // Toggle active class on course section
        const courseSection = title.parentElement;
        courseSection.classList.toggle('active');
    });
});

const links = document.querySelectorAll('a');

links.forEach(link => {
  link.addEventListener('click', function(event) {
    event.preventDefault(); 

    const   
 href = this.getAttribute('href'); 


    document.body.classList.add('fade-out'); 

    setTimeout(() => {
      window.location.href = href; 
    }, 500); 
  });
});