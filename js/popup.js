let popup = document.querySelector('.auth');
let popup2 = document.querySelector('.reg-block');
let btn = document.querySelector('.login');
let btn2 = document.querySelector('.x')
let btn3 = document.querySelector('.x2')
let link = document.querySelector('.reg-link')
let link2 = document.querySelector('.reg-link2')
function open (){
    popup.classList.add('active');
}
btn.addEventListener('click', open);

function close (){
    popup.classList.remove('active');
    popup2.classList.remove('active');
}
btn2.addEventListener('click', close);

function close2 (){
    popup.classList.remove('active');
    popup2.classList.remove('active');
}
btn3.addEventListener('click', close);

function openreg (){
     popup2.classList.add('active');
     popup.classList.remove('active');
}
link.addEventListener('click', openreg);

function openauth (){
    popup.classList.add('active');
    popup2.classList.remove('active');
}
link2.addEventListener('click', openauth);
document.myForm.reset();