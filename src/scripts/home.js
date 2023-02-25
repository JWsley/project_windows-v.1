var dt = new Date();
var dia = dt.getDay();



var mes =  Number(dt.getMonth())+1;
var ano = dt.getFullYear();



if(dia < 10){
    dia = '0' + dia;
}
if(mes < 10){
    mes = '0' + mes;
}

const data = `${dia}/${(mes)}/${ano}`;
const date = document.querySelector('#date');
date.textContent = data;

var hora = dt.getHours();
if (hora < 10){
    hora = '0' + hora;
}
var min = dt.getMinutes();
if (min < 10){
    min = '0' + min;
}
const tempo = `${hora}:${min}`;
const time = document.querySelector('#time');
time.textContent = tempo;

const mainmenu = document.querySelector('#mainmenu');


document.addEventListener('contextmenu',function(e){
    e.preventDefault();
    const location = mainmenu.getBoundingClientRect();
     const x = event.clientX - location.left;
     const y = event.clientY - location.top;
     const newposit = `top:${y}px; left:${x}px;`;
    const menuopt = document.querySelector('#menuopt');
    menuopt.setAttribute('style',newposit);
    menuopt.style.display = "block";

    

},false);


const item = document.querySelector('#item')