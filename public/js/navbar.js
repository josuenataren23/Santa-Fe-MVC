//change color of navbar when scroll
window.addEventListener('scroll', function() {
    const navbar = document.querySelector('.navbar');
    if (window.scrollY > 100) {
        navbar.classList.add('bg-gray-950');
    } else {
        navbar.classList.remove('bg-gray-950');
    }
});


