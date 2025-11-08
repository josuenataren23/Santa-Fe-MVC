const user = document.querySelector('#user');
const cardUser = document.querySelector('#card-user');
let active = false;

user.addEventListener('click', function() {
    if (active) {
        cardUser.classList.add('hidden');
        active = false;
    } else {
        
        cardUser.classList.remove('hidden');
        active = true;
    }
    console.log('card user:', active);
});
