<?php

session_start();

include "connect.php";

$msg = '';
if (isset($_POST['fname'],$_POST['sname'],$_POST['gender'],$_POST['dob'],$_POST['id'],$_POST['nation'],$_POST['phone'],$_POST['email'],$_POST['email'],$_POST['county'],$_POST['town'],$_POST['box'],$_POST['code'],$_POST['adm'],$_POST['yos'],$_POST['type'],$_POST['res'],$_FILES['image'])){
    $fname  = mysqli_real_escape_string($conn, htmlentities($_POST['fname']));
    $sname  = mysqli_real_escape_string($conn, htmlentities($_POST['sname']));
    $gender = mysqli_real_escape_string($conn, htmlentities($_POST['gender']));
    $dob    = mysqli_real_escape_string($conn, htmlentities($_POST['dob']));
    $id     = mysqli_real_escape_string($conn, htmlentities($_POST['id']));
    $nation = mysqli_real_escape_string($conn, htmlentities($_POST['nation']));
    $phone  = mysqli_real_escape_string($conn, htmlentities($_POST['phone']));
    $email  = mysqli_real_escape_string($conn, htmlentities($_POST['email']));
    $county = mysqli_real_escape_string($conn, htmlentities($_POST['county']));
    $town   = mysqli_real_escape_string($conn, htmlentities($_POST['town']));
    $box    = mysqli_real_escape_string($conn, htmlentities($_POST['box']));
    $code   = mysqli_real_escape_string($conn, htmlentities($_POST['code']));
    $adm    = mysqli_real_escape_string($conn, htmlentities($_POST['adm']));
    $yos    = mysqli_real_escape_string($conn, htmlentities($_POST['yos']));
    $type   = mysqli_real_escape_string($conn, htmlentities($_POST['type']));
    $res    = mysqli_real_escape_string($conn, htmlentities($_POST['res']));
    $name   = $fname.' '.$sname;
    $address= $box.'-'.$code;

    //$pic    = mysqli_real_escape_string($conn, htmlentities($_FILES['pic']));
    $pic_tmp    = $_FILES['image']['tmp_name'];
    $pic_name   = $_FILES['image']['name'];
    $pic_type   = $_FILES['image']['type'];

    $allowed_type = array('image/png', 'image/jpg', 'image/gif', 'image/jpeg');//Define the allowed formats of image

    if (in_array($pic_type, $allowed_type)){
        $path = '../img/'.$pic_name;
    }else{
        $msg = 'File type not allowed';
    }

    //CREATE VALIDATION FOR DATA
    /*if (!is_numeric($phone)){
        $msg = $phone.'is not numeric';
    }else{

    }*/

    if (!empty($msg)){
        echo $msg;
    }elseif (empty($msg)){
        $msg = "";
        $sql = "INSERT INTO `student` (`name`,`gender`,`dob`,`id`,`nation`,`phone`,`email`,`county`,`town`,`address`,`adm`,`yos`,`type`,`residence`,`pic`) 
                VALUES('$name','$gender','$dob','$id','$nation','$phone','$email','$county','$town','$address','$adm','$yos','$type','$res','$path')";
        move_uploaded_file($pic_tmp, $path);

        $result = mysqli_query($conn, $sql);

        if ($result == true){
            echo "<script> alert('Successful');</script>";
            echo "<script>window.location.assign('../index.php');</script>";
        }else{
            echo mysqli_error($conn);
        }
    }else{
        echo mysqli_error($conn);
    }
}

?>