    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/estilos.css" rel="stylesheet">
        <title>Clima</title>
        <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
        <script src="js/clima.js"></script>
    </head>

    <body>
        <div class="contenedor-principal">
            <div class="dia-seleccionado-contenedor">
                <div class="clima">
                    <div class="alinear" id="img-seleccionado"><img src="//ssl.gstatic.com/onebox/weather/64/partly_cloudy.png"></div>
                    <div class="temp-promedio alinear" id="temp-promedio">21</div>
                    <div class="celsius alinear">°C</div>
                    <div class="info-clima alinear">
                        <div class="precipitaciones" id="precipitaciones">Prob. de precipitaciones: 1%</div>
                        <div class="humedad" id="humedad">Humedad: 73%</div>
                        <div class="viento" id="viento">Viento: a 3 m/s o 11 km/h</div>
                    </div>
                </div>
                <div class="info">
                    <div class="localidad" id="localidad">Buenos Aires</div>
                    <div class="dia l-gris" id="dia-semana">Lunes</div>
                    <div class="clima-info l-gris" id="clima-info">Soleado</div>
                </div>
            </div>
            <div class="dias-contenedor">
                <?php $arrayDias = array('Domingo', 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado');
                $hoy = getdate();
                for ($i = $hoy["wday"]; $i < ($hoy["wday"] + 5); $i++) { ?>
                    <a href="javascript:clima('<?php echo $i ?>');">
                        <div class="dias <?php if ($i == $hoy["wday"]) {
                                                    echo ("seleccionado");
                                                } ?>">
                            <div class="fecha"><?php echo $arrayDias[$i];
                                                        if ($i == $hoy["wday"]) {
                                                            echo ("(Hoy)");
                                                        } ?></div>
                            <img src="//ssl.gstatic.com/onebox/weather/64/partly_cloudy.png">
                            <div class="temp">
                                <div class="temp-max">24°</div>
                                <div class="temp-min">18°</div>
                            </div>
                        </div>
                    </a> <?php } ?>
            </div>
        </div>
        <script>
            clima('<?php echo $hoy["wday"]?>');
        </script>
    </body>

    </html>