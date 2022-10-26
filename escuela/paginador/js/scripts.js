function myFunction(num){
    $.ajax({                
        url: "../php/foro-militar.php?pag=" + num,
        dataType: 'json',
        success: function(datos){
            alert("funciona")
        }
    });     
}