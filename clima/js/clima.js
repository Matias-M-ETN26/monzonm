function clima(dia) {
    console.log(dia);
    var latitud = -34.6140489;
    var longitud = -58.4078955;
    const apiPersonal = "8ead1a015aabf195b5e511574525951c"
    $.ajax({
        url: 'https://api.openweathermap.org/data/2.5/forecast?lat=' + latitud + '&lon=' + longitud + '&appid=' + apiPersonal + '&units=metric&lang=sp',
        dataType: 'json',
        success: function (info) {
            console.log(info)
            /* Declaro variables */
            //HTML
            var img = $("#img-seleccionado");
            var temp_promedio = $("#temp-promedio");
            var precipitaciones = $("#precipitaciones");
            var humedad = $("#humedad");
            var viento = $("#viento");
            var localidad = $("#localidad");
            var dia_semana = $("#dia-semana");
            var clima_info = $("#clima-info");
            // Array
            const arrayDias = ['Domingo', 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado'];
            /* Promedios */
            var temp_promedioRes = 0;
            var precipitacion_promedio = 0;
            var humedad_promedio = 0;
            var viento_promedioMs = 0;
            var viento_promedioKms = 0;
            /* Averiguo los datos de hoy */
            var hoy = info["list"][0]["dt_txt"].split(" ")[0];
            var cantRegHoy = 0;
            info["list"].forEach((elemento, index) => {
                if (info["list"][index]["dt_txt"].split(" ")[0] == hoy) {
                    cantRegHoy++;
                }
            });

            /* Promedio Datos */
            for (i = 0; i < cantRegHoy; i++) {
                temp_promedioRes += Math.round((info["list"][i]["main"]["temp_max"] + info["list"][i]["main"]["temp_min"]) / 2);
                precipitacion_promedio += info["list"][i]["pop"];
                humedad_promedio += info["list"][i]["main"]["humidity"];
                viento_promedioMs += info["list"][i]["wind"]["speed"];
                viento_promedioKms += (info["list"][i]["wind"]["speed"])*(18/5);
            }
            temp_promedioRes = Math.round(temp_promedioRes / cantRegHoy); //Promedio de la temperatura de hoy
            precipitacion_promedio = precipitacion_promedio / cantRegHoy; //Promedio de la prob. de precipitaciones de hoy
            humedad_promedio = Math.round(humedad_promedio / cantRegHoy); //Promedio de la humedad de hoy
            viento_promedioMs = Math.round(viento_promedioMs / cantRegHoy); //Promedio del viento en m/s de hoy
            viento_promedioKms = Math.round(viento_promedioKms / cantRegHoy); //Promedio del viento en km/h de hoy

            /* Reemplazo datos en HTML*/
            /* Datos en dia-seleccionado-contenedor */
            img.html(`<img class="img-clima" src="http://openweathermap.org/img/wn/${info["list"][0]["weather"][0]["icon"]}@2x.png"></img>`);
            temp_promedio.html(temp_promedioRes);
            precipitaciones.html(`Prob. de precipitaciones: ${precipitacion_promedio}%`);
            humedad.html(`Humedad: ${humedad_promedio}%`);
            viento.html(`Viento: a ${viento_promedioMs} m/s o ${viento_promedioKms} km/h`);
            localidad.html(info["city"]["name"]);
            dia_semana.html(arrayDias[dia]);
            clima_info.html(info["list"][0]["weather"][0]["description"][0].toUpperCase() +info["list"][0]["weather"][0]["description"].substring(1));
            /* Datos en dia-contenedor */
         
        }
    });
}