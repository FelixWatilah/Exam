<?php
include "connect.php";

if ($conn == true){
    if (isset($_GET['adm'])){

        $adm = mysqli_real_escape_string($conn, htmlentities($_GET['adm']));

        $search = mysqli_query($conn, "SELECT * FROM `student` WHERE `adm`='$adm'");

        if ($search == true){

            $count = mysqli_num_rows($search);

            $row = mysqli_fetch_assoc($search);

            echo json_encode($row);

        }
    }
}

?>