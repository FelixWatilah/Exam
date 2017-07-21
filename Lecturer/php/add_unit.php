<?php

include ("connect.php");

if (isset($_POST['unit_code']) && isset($_POST['unit_name'])){

    $unit_code = $_POST['unit_code'];
    $unit_name = $_POST['unit_name'];

    $unit = mysqli_query($conn, "INSERT INTO `subject`(`subject_name`,`unit_name`) VALUES('$unit_code','$unit_name')");

    if ($unit == true){
        echo "OK";
    }

}

?>