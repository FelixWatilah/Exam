<?php

$conn = mysqli_connect("localhost","root","","Exam");

$adm = $_GET['adm'];

//DELETE STUDENT FROM `student` TABLE
$delete_s = mysqli_query($conn,"DELETE FROM `student` WHERE adm='$adm'");
if ($delete_s == true){

    //DELETE STUDENT FROM `registered` TABLE
    $delete_r = mysqli_query($conn,"DELETE FROM `registered` WHERE `stud_adm`='$adm'");
    if ($delete_r == true){

        //DELETE STUDENT FROM `marks` TABLE
        $delete_m = mysqli_query($conn,"DELETE FROM `marks` WHERE `stud_adm`='$adm'");
        if ($delete_m == true){
            echo "<script> alert('Student deleted Successfully from all tables');</script>";
            echo "<script>window.location.assign('../index.php');</script>";
        }else{
            echo "<script> alert('Could not delete the student from marks table');</script>";
            echo "<script>window.location.assign('../index.php');</script>";
        }

    }else{
        echo "<script> alert('Failed to delete student from registered table');</script>";
        echo "<script>window.location.assign('../index.php');</script>";
    }

}else{
    echo "<script> alert('Failed to delete student from student table.');</script>";
    echo "<script>window.location.assign('../index.php');</script>";
}

?>