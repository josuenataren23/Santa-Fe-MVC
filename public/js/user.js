const user = document.querySelector('#user');
const cardUser = document.querySelector('#card-user');
const login = document.querySelector('#login');
let active = false;
if(window.location.href.includes('controller=Auth&action=LoginForm')){
    login.style.display = 'none';
}
user.addEventListener('click', function() {
    if (active) {
        cardUser.classList.add('hidden');
        active = false;
    } else {
        
        cardUser.classList.remove('hidden');
        active = true;
    }
    // console.log('card user:', active);
});

const user_r = document.querySelector('#user-responsive');
const cardUser_r = document.querySelector('#card-user-responsive');
let active_r = false;

user_r.addEventListener('click', function() {
    if (active_r) {
        cardUser_r.classList.add('hidden');
        active_r = false;
    } else {
        
        cardUser_r.classList.remove('hidden');
        active_r = true;
    }
    // console.log('card user responsive:', active_r);

});
