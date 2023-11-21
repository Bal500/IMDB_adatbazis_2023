let userinfo = document.querySelector('.userinfo');
let userinfoForm = document.querySelector('.userinfoForm');
let privacy = document.querySelector('.privacy')
let privacyForm = document.querySelector('.privacyForm')
let security = document.querySelector('.security');
let securityForm = document.querySelector('.securityForm');
let chat = document.querySelector('.chat');
let chatForm = document.querySelector('.chatForm');

userinfo.addEventListener('click', ()=> {
    userinfoForm.classList.add('active');
    privacyForm.classList.remove('active');
    securityForm.classList.remove('active');
    chatForm.classList.remove('active');
});

privacy.addEventListener('click', ()=> {
    userinfoForm.classList.remove('active');
    privacyForm.classList.add('active');
    securityForm.classList.remove('active');
    chatForm.classList.remove('active');
});

security.addEventListener('click', ()=> {
    userinfoForm.classList.remove('active');
    privacyForm.classList.remove('active');
    securityForm.classList.add('active');
    chatForm.classList.remove('active');
});

chat.addEventListener('click', ()=> {
    userinfoForm.classList.remove('active');
    privacyForm.classList.remove('active');
    securityForm.classList.remove('active');
    chatForm.classList.add('active');
});