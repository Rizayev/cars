$(document).ready(function () {
    // CAR MARK|MODELS
    $('#car-mark').change(function () {
        var markIndex = $(this).find('option:selected').index();
        if (markIndex > 0) {
            $('#car-model').removeAttr('disabled');
        }else {$('#car-model').attr('disabled','disabled'); }

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
                $('#car-model option').remove();

                for (var i = 0; i < data.length; i++) {
                    $('#car-model')
                        .append($('<option>', {value: data[i].name})
                            .text(data[i].name));
                }
            }
        });
    });

    $('#car-region').change(function () {

        var regionIndex = $(this).find('option:selected').index()
        console.log(regionIndex);
        if (regionIndex > 0) {
            $('#car-city').removeAttr('disabled');
        }else {$('#car-city').attr('disabled','disabled'); }

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
                $('#car-city option').remove();

                for (var i = 0; i < data.length; i++) {
                    $('#car-city')
                        .append($('<option>', {value: data[i].city_id})
                            .text(data[i].city_name));
                }
            }
        });
    });
    // CAR MARK|MODELS
});