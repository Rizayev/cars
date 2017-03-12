/**
 * Created by elsevar on 3/11/17.
 */

$(document).ready(function () {
    $('#cars-mark').change(function () {
        var value = $(this).val();
        $.ajax({
            url: '/car/get-model',
            type: 'GET',
            cache: true,
            dataType: 'json',
            data: {
                id: value
            },
            success: function (data) {
                $('#cars-model option').remove();

                for (var i = 0; i < data.length; i++) {
                    $('#cars-model')
                        .append($('<option>', {value: data[i].id_car_model})
                            .text(data[i].name));
                }
            }
        });
    });

    $('#cars-car_region').change(function () {
        var value = $(this).val();
        $.ajax({
            url: '/car/get-city',
            type: 'GET',
            cache: true,
            dataType: 'json',
            data: {
                id: value
            },
            success: function (data) {
                $('#cars-car_city option').remove();

                for (var i = 0; i < data.length; i++) {
                    $('#cars-car_city')
                        .append($('<option>', {value: data[i].city_id})
                            .text(data[i].city_name));
                }
            }
        });
    });





});