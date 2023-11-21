let wrapper = document.querySelector('.wrapper');
let loginLink = document.querySelector('.login-link')
let registLink = document.querySelector('.regist-link');

registLink.addEventListener('click', ()=> {
    wrapper.classList.add('active');
});

loginLink.addEventListener('click', ()=> {
    wrapper.classList.remove('active');
});