
var general__formularios=document.querySelector('.general__formularios');
var login__form=document.querySelector('.login__form');
var login__ingresar=document.querySelector('.login__ingresar');
var atras__iniciar=document.querySelector('.atras__iniciar');
var atras__registrar=document.querySelector('.atras__registrar');

var registrar=document.getElementById('registrar').addEventListener("click",registrar);
var iniciar=document.getElementById('iniciar').addEventListener("click",iniciar);


function registrar(){
    login__ingresar.style.display="block";
    general__formularios.style.left="460px";
}

function iniciar(){
    login__form.style.display="block";
    login__ingresar.style.display="none"
    general__formularios.style.left="0";
}
