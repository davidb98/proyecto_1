$(document).ready(function(){
    $("#eliminar").click(function (e){
        e.preventDefault();
        var mensaje = confirm("¿Esta Seguro?");
        if(mensaje) {
            var fila = $(this).parent().parent();
            var usuario = fila.find("#idUsuario").text();
            var data = {idUsuario: usuario};
            $.post("../usuario/eliminar", data);
            console.log("Columna eliminada");
            fila.remove();
        }
    });
    $("#guardar").click(function (l){
        l.preventDefault();
        var data = $('#frmodificar').serialize();
        $.post("usuario/modificar", data);
        alert("modificado");
        var mensaje = confirm("¿Desea volver a la tabla?");
        if(mensaje){
            var url = "usuario/consultar";
            $(location).attr("href", url);
        }
    })
})
