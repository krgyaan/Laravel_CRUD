import './bootstrap';

const loginModel = document.querySelector('.login-model');
const registerModel = document.querySelector('.register-model');
const loginBtn = document.querySelector('.login-btn');
const registerBtn = document.querySelector('.register-btn');
const closeBtn = document.querySelector('.close-btn');

loginBtn.addEventListener('click', () => {
    loginModel.classList.add('active');
});

registerBtn.addEventListener('click', () => {
    registerModel.classList.add('active');
});

closeBtn.addEventListener('click', () => {
    loginModel.classList.remove('active');
    registerModel.classList.remove('active');
});