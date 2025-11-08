//change color of navbar when scroll
window.addEventListener('scroll', function() {
    const navbar = document.querySelector('.navbar');
    if (window.scrollY > 30) {
        navbar.classList.add('bg-gray-900');
        
        
    } else {
        navbar.classList.remove('bg-gray-900');
        
    }
});


