const bars = document.querySelector('#bars');
const navbar = document.querySelector('#navbar');
let visible = false;

bars.addEventListener('click', function() {
    if (visible) {
        
        navbar.classList.add('not-md:hidden');
        visible = false;
    } else {
        
        navbar.classList.remove('not-md:hidden');
        visible = true;
    }
    console.log('navbar:', visible);
});

