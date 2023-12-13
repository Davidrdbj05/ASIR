$(document).ready(function () {
    $('#buscar').click(function () {
        // Establecemos las variables que vamos a usar
        let lat = $('#lat').val();
        let lon = $('#lon').val();
        let apiKey = 'ddbb1e67c0b128112a430fc0ce835ad6';

        // Llamada AJAX utilizando jQuery
        $.ajax({
            url: `https://api.openweathermap.org/data/2.5/weather?lat=${lat}&lon=${lon}&appid=${apiKey}`,
            success: function (data) {
                
                if (data.main.aqi = 1) {
                    calidad = "Bueno";
                }
                else if (data.main.aqi = 2) {
                    calidad = "Aceptable";
                }
                else if (data.main.aqi = 3) {
                calidad = "Moderado";
                }
                else if (data.main.aqi = 4) {
                    calidad = "Mala";
                }
                else {
                    calidad = "Muy mala";
                }

                $('#resultado').html(`
                <h2>Parámetros obtenidos</h2>
                <p>Calidad del aire: `+calidad+`</p>
                <p>Cantidad de monóxido de carbono: ${data.components.co}μg/m3</p>
                `);
            },
            error: function () {
                $('#resultado').html('<p>No se pudo obtener la información.</p>');
            },
        });
    });
});