/**
 * Created by Watilah on 04-Apr-17.
 */
$(document).ready(function () {
    $('.side_nav li').hover(function(){
        $(this).children('ul').hide();
        $(this).children('ul').slideDown('slow');
    }, function(){
        $('ul', this).slideUp('slow');
    });
});