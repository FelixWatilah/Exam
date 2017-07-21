<?php

$conn   =   mysqli_connect('localhost','root','','exam');

if (isset($_SESSION['student'])){
    echo $_SESSION['student'];
}

/*if (isset($_SESSION['student'],$_POST['sub1'],$_POST['sub2'],$_POST['sub3'],$_POST['sub4'],$_POST['sub5'],$_POST['sub6'],$_POST['sub7'],$_POST['sub8'])) {

    $adm    = mysqli_real_escape_string($conn, htmlentities($_SESSION['student']));
    $sub1   = mysqli_real_escape_string($conn, htmlentities($_POST['sub1']));
    $sub2   = mysqli_real_escape_string($conn, htmlentities($_POST['sub2']));
    $sub3   = mysqli_real_escape_string($conn, htmlentities($_POST['sub3']));
    $sub4   = mysqli_real_escape_string($conn, htmlentities($_POST['sub4']));
    $sub5   = mysqli_real_escape_string($conn, htmlentities($_POST['sub5']));
    $sub6   = mysqli_real_escape_string($conn, htmlentities($_POST['sub6']));
    $sub7   = mysqli_real_escape_string($conn, htmlentities($_POST['sub7']));
    $sub8   = mysqli_real_escape_string($conn, htmlentities($_POST['sub8']));


        if ($sub1=='BIT 2000' && $sub2=='BIT 2001' && $sub3=='BIT 2002' && $sub4=='BIT 2003' &&
            $sub5=='BIT 2004' && $sub6=='BIT 2005' && $sub7=='BIT 2006' && $sub8=='BIT 2007'){

            $sub_id = 1;

        }elseif ($sub1=='ICS 2000' && $sub2=='ICS 2001' && $sub3=='ICS 2002' && $sub4=='ICS 2003'
            && $sub5=='ICS 2004' && $sub6=='ICS 2005' && $sub7=='ICS 2006' && $sub8=='ICS 2007'){

            $sub_id = 2;

        }elseif ($sub1=='MCS 2000' && $sub2=='MCS 2001' && $sub3=='MCS 2002' && $sub4=='MCS 2003'
            && $sub5=='MCS 2004' && $sub6=='MCS 2005' && $sub7=='MCS 2006' && $sub8=='MCS2007'){

            $sub_id = 3;

        }elseif($sub1=='CIT 2000' && $sub2=='CIT 2001' && $sub3=='CIT 2002' && $sub4=='CIT 2003'
            && $sub5=='CIT 2004' && $sub6=='CIT 2005' && $sub7=='CIT 2006' && $sub8=='CIT 2007'){

            $sub_id = 4;

        }elseif($sub1=='BUS 2000' && $sub2=='BUS 2001' && $sub3=='BUS 2002' && $sub4=='BUS 2003'
            && $sub5=='BUS 2004' && $sub6=='BUS 2005' && $sub7=='BUS 2006' && $sub8=='BUS 2007'){
            $sub_id = 5;
        }

        $insert = mysqli_query($conn, "
            INSERT INTO `registered`(`stud_adm`,`sub_id`,`sub_1`,`sub_2`,`sub_3`,`sub_4`,`sub_5`,`sub_6`,`sub_7`,`sub_8`) 
            VALUES('$adm','$sub_id','$sub1','$sub2','$sub3','$sub4','$sub5','$sub6','$sub7','$sub8')");

        if ($insert == true){
            echo "<script type='text/javascript'>
            alert('Updated Successfully!!');
            window.location.assign('index.php');</script>";
        }else{
            echo "<script type='text/javascript'>
            alert('One student cannot register twice for the exam!!');
            window.location.assign('index.php');</script>";
        }
}*/
?>