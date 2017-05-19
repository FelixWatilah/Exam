<?php

include 'db_connect.php';

if (isset($_POST['user_type'], $_POST['adm_no'], $_POST['stud_pass'])){

    $user_type  = $_POST['user_type'];
    $adm_no     = $_POST['adm_no'];
    $stud_pass  = $_POST['stud_pass'];

}elseif (isset($_POST['user_type'], $_POST['lec_no'], $_POST['lec_pass'])){

}elseif (isset($_POST['user_type'], $_POST['admin'], $_POST['admin_pass'])){

}