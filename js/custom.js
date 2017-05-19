//slide down children menu on the left menu
$('.side_nav li').hover(function(){
    $(this).children('ul').hide();
    $(this).children('ul').slideDown('slow');
}, function(){
    $('ul', this).slideUp('slow');
});