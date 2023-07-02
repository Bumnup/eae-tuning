let popup3 = document.querySelector('.pop-block');
let btn4 = document.querySelector('.usluga-text');
let btn5 = document.querySelector('.x3')
function open (){
    popup3.classList.add('active');
}
btn4.addEventListener('click', open);

function close (){
    popup3.classList.remove('active');
}
btn5.addEventListener('click', close);
document.myForm.reset();