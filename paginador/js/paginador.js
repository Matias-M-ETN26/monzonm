function paginador(pag){
    $.ajax({
        url: "/monzonm/paginador/models/paginador.php",
        type: "GET",
        data: {pag:pag},
        dataType: "json",
        success: function (result) {
          var categorias = result["categorias"];
          var cantPags = result["cantPags"];
          var pagActual = result["pagActual"];
          $(".fila-secundaria").html("");
          window.history.pushState(null, "", "/monzonm/paginador/paginador.php?pag="+pagActual);
          categorias.forEach(categoria => document.getElementById("conteiner-principal").innerHTML += '<div class="fila-secundaria"><div class="columna">'+ categoria["id"]+'</div><div class="columna">'+ categoria["nombre"]+'</div><div class="columna">'+ categoria["fecha_alta"]+'</div><div class="columna">'+ categoria["fecha_baja"]+'</div></div>');
        },
        error: function () {
          alert("error");
        },
      });   
}