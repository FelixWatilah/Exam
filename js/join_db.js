$(document).ready(function () {
    $('.edit').click(function () {

        var adm = $(this).attr('id');

        $.ajax({
            url     :   "php/update.php",
            method  :   "GET",
            data    :   {adm:adm},
            dataType:   "json",
            success: function (data) {
                $('#img').val(data.pic);
                $('#u_adm').val(data.adm);
                $('#u_name').val(data.name);
                $('#u_email').val(data.email);
                $('#u_phone').val(data.phone);
                $('#u_id').val(data.id);
                $('#u_county').val(data.county);
                $('#u_town').val(data.town);
                $('#u_address').val(data.address);
                $('#edit_stud').modal('show');
            },
            error: function (data) {
                $('#alert').text(data).slideDown();
            }
        });

    });
});