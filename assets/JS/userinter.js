let userinfo = document.querySelector('.userinfo');
let userinfoForm = document.querySelector('.userinfoForm');
let security = document.querySelector('.security');
let securityForm = document.querySelector('.securityForm');

userinfo.addEventListener('click', ()=> {
    userinfoForm.classList.add('active');
    securityForm.classList.remove('active');
});

security.addEventListener('click', ()=> {
    userinfoForm.classList.remove('active');
    securityForm.classList.add('active');
});
