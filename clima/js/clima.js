function clima(dia) {
    $('#dia-seleccionado').hide();
    $('#dias-contenedor').hide();
    $('#cargando').show();
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
                var celsius = $("#celsius");
                var precipitaciones = $("#precipitaciones");
                var humedad = $("#humedad");
                var viento = $("#viento");
                var localidad = $("#localidad");
                var dia_semana = $("#dia-semana");
                var clima_info = $("#clima-info");
                var dia_contenedor = $("#dias-contenedor");
                var diaActual = (new Date()).getDay();
                var diasContenido = "";
                // Array
                const arrayDias = ['Domingo', 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado'];
                /* Promedios */
                var temp_promedioRes = 0;
                var precipitacion_promedio = 0;
                var humedad_promedio = 0;
                var viento_promedioMs = 0;
                var viento_promedioKmh = 0;
                /* Averiguo los datos de hoy */

                var diaVariable = parseInt(info["list"][0]["dt_txt"].split(" ")[0].split("-")[2]) + dia;
                var diaVariableRegis = [];
                info["list"].forEach((elemento, index) => {
                    if (info["list"][index]["dt_txt"].split(" ")[0].split("-")[2] == diaVariable) {
                        diaVariableRegis.push(index);
                    }
                });
                var cantRegDiavariable = diaVariableRegis.length;
                /* Promedio Datos */
                for (i = 0; i < cantRegDiavariable; i++) {
                    temp_promedioRes += Math.round((info["list"][diaVariableRegis[i]]["main"]["temp_max"] + info["list"][diaVariableRegis[i]]["main"]["temp_min"]) / 2);
                    precipitacion_promedio += info["list"][diaVariableRegis[i]]["pop"];
                    humedad_promedio += info["list"][diaVariableRegis[i]]["main"]["humidity"];
                    viento_promedioMs += info["list"][diaVariableRegis[i]]["wind"]["speed"];
                    viento_promedioKmh += (info["list"][diaVariableRegis[i]]["wind"]["speed"]) * (18 / 5);
                }
                temp_promedioRes = Math.round(temp_promedioRes / cantRegDiavariable); //Promedio de la temperatura de hoy
                precipitacion_promedio = Math.round((precipitacion_promedio / cantRegDiavariable) * 100); //Promedio de la prob. de precipitaciones de hoy
                humedad_promedio = Math.round(humedad_promedio / cantRegDiavariable); //Promedio de la humedad de hoy
                viento_promedioMs = Math.round(viento_promedioMs / cantRegDiavariable); //Promedio del viento en m/s de hoy
                viento_promedioKmh = Math.round(viento_promedioKmh / cantRegDiavariable); //Promedio del viento en km/h de hoy

                /* Reemplazo datos en HTML*/
                /* Datos en dia-seleccionado-contenedor */
                img.html(`<img class="img-clima" src="http://openweathermap.org/img/wn/${info["list"][diaVariableRegis[0]]["weather"][0]["icon"]}@2x.png"></img>`);
                temp_promedio.html(temp_promedioRes);
                celsius.html("°C");
                precipitaciones.html(`Prob. de precipitaciones: ${precipitacion_promedio}%`);
                humedad.html(`Humedad: ${humedad_promedio}%`);
                viento.html(`Viento: a ${viento_promedioMs} m/s o ${viento_promedioKmh} km/h`);
                localidad.html(`${info["city"]["country"]}, ${info["city"]["name"]}`);
                dia_semana.html(arrayDias[diaActual + dia]);
                clima_info.html(info["list"][diaVariableRegis[0]]["weather"][0]["description"][0].toUpperCase() + info["list"][diaVariableRegis[0]]["weather"][0]["description"].substring(1));
                /* Datos en dia-contenedor */
                for (i = 0; i < 5; i++) {
                    diasContenido += '<div class="dias-contenedor" id="dias-contenedor">';
                    diasContenido += `<a href="javascript:clima(${i});">`;
                    diasContenido += `<div class="dias ${i == dia ? "seleccionado" : ""}">`;
                    diasContenido += `<div class="fecha">${arrayDias[diaActual]}</div>`;
                    diasContenido += `</div>`;
                    diasContenido += `</a>`;
                    diasContenido += `</div>`;
                    diaActual = (diaActual + 1) !== 7 ? diaActual + 1 : 0;
                }
                dia_contenedor.html(diasContenido);
                $('#dia-seleccionado').show();
                $('#dias-contenedor').show();
                $('#cargando').hide();
            }
        });


}