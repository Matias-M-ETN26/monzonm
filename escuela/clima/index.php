<html>
    <head>    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script>            
            var latitud = -34.6140489;
            var longitud = -58.4078955;
            $.ajax({                
                url: 'https://api.openweathermap.org/data/2.5/forecast?lat='+latitud+'&lon='+longitud+'&appid=2be41a993eaf59fb2c6d4e960c4a2e5f&units=metric&lang=sp',
                dataType: 'json',
                success: function(datos){
                    alert("funciona")
                }
            });            
        </script>
    </head>
    <body background="img/fondo-clima.jpg">
    <div class="conteiner-principal">
    <div class="conteiner"></div>
    </div>    
    </body>
</html>