//validar registro Profesor
function validarRegistro(){
    var nombre = document.querySelector("#use_name").value;
    var apellido = document.querySelector("#use_surname").value;
    var Teléfono = document.querySelector("#");
    var Contraseña = document.querySelector("#use_password").value;
    var NúmeroDocumento = document.querySelector("#use_id").value;
    var FechaDeNacimiento = document.querySelector("#");
    
    //valiar nombre
    
    if (nombre != ""){
        
        var caracter = nombre.length;
        var expresion = /^[a-zA-Z]*$/;
        
        if (caracter > 10){
            document.querySelector("label[for = 'use_name']").innerHTML += "<br>escriba porfavor un nombre valido.";
            return false;
        }
        
        if(!expresion.test(nombre)){
            document.querySelector("label[for='use_name']").innerHTML += "<br> no escriba caracteres especiales.";
            return false;
        }
    }
    
    //valiar contraseña
    
    if (Contraseña != ""){
        
        var caracter = Contraseña.length;
        var expresion = /^[a-zA-Z0-9]*$/;
        
        if (caracter > 6){
            document.querySelector("label[for = 'use_password']").innerHTML += "<br>La contraseña debe tener al menos 6 caracteres.";
            return false;
        }
        
        if(!expresion.test(nombre)){
            document.querySelector("label[for='use_password']").innerHTML += "<br> no escriba caracteres especiales.";
            return false;
        }
        
    }
    return true;
    
}



//final validar


