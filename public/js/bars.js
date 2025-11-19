const bars = document.querySelector('#bars');
const navbar = document.querySelector('#navbar');
const header = document.querySelector('.navbar');
let visible = false;

bars.addEventListener('click', function() {
    if (visible) {
        header.classList.remove('bg-gray-950/99');
        navbar.classList.add('not-md:hidden');
        visible = false;
    } else {
        header.classList.add('bg-gray-950/99');
        navbar.classList.remove('not-md:hidden');
        visible = true;
    }
    // console.log('navbar:', visible);
});

