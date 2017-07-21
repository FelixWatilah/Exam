$(document).ready(function () {

    //slide down children menu on the left menu
    $('.side_nav li').hover(function(){
        $(this).children('ul').hide();
        $(this).children('ul').slideDown('slow');
    }, function(){
        $('ul', this).slideUp('slow');
    });

    //LOAD PAGES ON THE
    $('.lec').click(function () {

        var href = $(this).attr('href');
        var lec_content = $('#lec_content');

        if (lec_content != ''){
            lec_content.html();
            lec_content.load(href);
            return false;
        }else{
            $('#lec_content').load(href);
            return false;
        }

    });//load content with ajax

    //CHECK SELECTED TAB//
    $('.tab a').click(function () {
        var name = $(this).attr('id');

        //student login
        $('#stud_login').click(function () {

            var adm_no = $('#adm_no').val();
            var stud_pass = $('#stud_pass').val();

            if (name != ''){
                if (adm_no != ''){
                    if (stud_pass != ''){
                        $.post('php/login.php',{name:name, adm_no:adm_no, stud_pass:stud_pass},function (data) {
                            if (data == 'Student'){
                                window.location.assign('Student/index.php');
                            }else{
                                alert(data);
                            }
                        });
                    }else{
                        alert('Please enter PASSWORD!');
                    }
                }else{
                    alert('Please enter ADMISSION NUMBER!');
                }
            }else{
                alert('Please select USER!');
            }

        });

        //lecturer login
        $('#lec_login').click(function () {

            var lec_number = $('#lec_number').val();
            var lec_pass = $('#lec_pass').val();

            if (name != ''){
                if (lec_number != ''){
                    if (lec_pass != ''){
                        $.post('php/login.php',{name:name, lec_number:lec_number, lec_pass:lec_pass},function (data) {
                            if (data == 'Lecturer'){
                                window.location.assign('Lecturer/index.php');
                            }else{
                                alert(data);
                            }
                        });
                    }else{
                        alert('Please Enter PASSWORD');
                    }
                }else{
                    alert('Please Enter LEC_NUMBER');
                }
            }else{
                alert('Please Select Type of USER');
            }

        });

        //Admin login
        $('#admin_login').click(function () {

            var admin = $('#admin').val();
            var admin_pass = $('#admin_pass').val();

            if (name != ''){
                if (admin != ''){
                    if (admin_pass != ''){
                        $.post('php/login.php',{name:name, admin:admin, admin_pass:admin_pass},function (data) {
                            if (data == 'Admin'){
                                window.location.assign('Admin/index.php');
                            }else{
                                alert(data);
                            }
                        });
                    }else{
                        alert('Please Enter PASSWORD!');
                    }
                }else{
                    alert('Please Enter USERNAME')
                }
            }else{
                alert('Please select USER');
            }

        });

    });
});