var password = document.getElementById('.clave#clave');
console.log(password);

function mostrarclave() {
    if(password.type == "password"){
        password.type = "text";
    }else{
        password.type = "password";
    }
}
