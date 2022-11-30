function paginador(pag){
    $.ajax({
        url: "/monzonm/paginador/models/paginador.php",
        type: "GET",
        data: {pag:pag},
        dataType: "json",
        success: function (result) {
          var mascotas = result["mascotas"];
          var cantPags = result["cantPags"];
          var pagActual = parseInt(result["pagActual"]);
          var cant_reg = parseInt(result["cant_reg"]);
          var cant_pestañas = parseInt(result["cant_pestañas"]);
          var comienzo = (pagActual - cant_pestañas) <= 0? 1: pagActual - cant_pestañas;
          var final = (pagActual + cant_pestañas) > cantPags? cantPags: pagActual + cant_pestañas;
          $(".fila-secundaria").html("");
          mascotas.forEach(mascota => document.getElementById("conteiner-principal").innerHTML += '<div class="fila-secundaria"><div class="columna">'+ mascota["id"]+'</div><div class="columna">'+ mascota["nombre"]+'</div><div class="columna">'+ mascota["edad"]+'</div><div class="columna">'+ mascota["sexo"]+'</div></div>');
          $(".pagination").html("");
          if((pagActual - cant_pestañas) > 1){
            document.getElementById("paginador").innerHTML += `<li class="page-item"><a class="page-link" href="javascript:paginador(1);">Inicio</a></li>`;  
          }
          document.getElementById("paginador").innerHTML += `<li class="page-item ${pagActual == 1 ? "disabled":""}"><a class="page-link" href="javascript:paginador(${pagActual-1});">&laquo;</a></li>`;
          for(i=comienzo;i <= final;i++){
            document.getElementById("paginador").innerHTML +=`<li class="page-item ${pagActual==(i)? "active":""}"><a class="page-link" href="javascript:paginador(${i})">${i}</a></li>`;
          }
          document.getElementById("paginador").innerHTML += `<li class="page-item ${pagActual == cantPags ? "disabled":""}"><a class="page-link" href="javascript:paginador(${pagActual+1});">&raquo;</a></li>`;
          if((pagActual + cant_pestañas) < cantPags){
            document.getElementById("paginador").innerHTML += `<li class="page-item"><a class="page-link" href="javascript:paginador(${cantPags});">Final</a></li>`;  
          }
        },
        error: function () {
          alert("error");
        },
      });   
}