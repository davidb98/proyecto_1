
var app = {"detener":
            function (i) {
                if (i.preventDefault) {
                    i.preventDefault();
                }
                if (i.stopPropagation) {
                    i.stopPropagation();
                }
                if (i.returnValue) {
                    i.returnValue = false;
                }
            },
    "peticion": function (url, parametros, funcion) {
        $.ajax({
           "url": url,
           "type": 'POST',
           "data":parametros,
            success: function (data) {
                funcion(data);
            },error: function (error) {
                console.log(error);
            }
        });
    }
};


