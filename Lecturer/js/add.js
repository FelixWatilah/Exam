//$(document).ready(function () {

    //slide down children menu on the left menu////////////////////////////////
    $('.side_nav li').hover(function(){
        $(this).children('ul').hide();
        $(this).children('ul').slideDown('slow');
    }, function(){
        $('ul', this).slideUp('slow');
    });

    ///////////////////////////////////////////////////////////////////
   $('#c_class').click(function () {

       var c_name   = $('#c_name').val();
       var c_num    = $('#c_num').val();

       if (c_name == ''){
           $('#c_info').html("<div class='alert alert-danger'><h6>Please enter name of class.</h6></div>").slideDown(2000).delay(2000).slideUp(2000);
       }else if (isNaN(c_num)){
           $('#c_info').html("<div class='alert alert-danger'><h6>Numeric name should be a number.</h6></div>").slideDown(2000).delay(2000).slideUp(2000);
       }else{

           $.post('php/add_class.php',{c_name:c_name, c_num:c_num},function (data) {
               if (data == 'success'){
                    $('#c_info').html("<div class='alert alert-success'><h6>Class added successfully.</h6></div>").slideDown(2000).delay(2000).slideUp(2000);
                    $('form')[0].reset();
               }else{
                   $('#c_info').html(data).slideDown().delay(2000).slideUp();
               }
           });
           return false;

       }

   });
//});
