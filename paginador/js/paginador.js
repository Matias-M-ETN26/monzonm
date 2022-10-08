function paginador(pag){
    $.ajax({
        //async: false,
        url: "/monzonm/paginador/models/paginador.php",
        type: "POST",
        data: datosRegis,
        success: function (result) {
          ajaxCallBack(result, 'usu');
        },
        error: function () {
          alert("error");
        },
      });   
}