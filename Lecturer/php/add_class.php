<?php

include "connect.php";

if (isset($_POST['c_name'], $_POST['c_num'])){

    $c_name = mysqli_real_escape_string($conn, htmlentities($_POST['c_name']));
    $c_num = mysqli_real_escape_string($conn, htmlentities($_POST['c_num']));

    if (!empty($c_name)){
        if (!empty($c_num)){

            $c_add  = mysqli_query($conn, "INSERT INTO `class` (`class_name`, `numeric_name`) VALUES ('$c_name','$c_num')");

            if ($c_add == true){
                echo "success";
            }else{
                echo "<div class='alert alert-danger text-center'><h6>Please check your values and try again.</h6></div>";
            }

        }else{
            echo "<div class='alert alert-danger text-center'><h6>Class name should not be empty.</h6></div>";
        }
    }else{
        echo "<div class='alert alert-danger text-center'><h6>Class name should be numeric.</h6></div>";
    }

}else{
    echo "<div class='alert alert-danger text-center'><h6>There is an error!!.</h6></div>";
}

?>