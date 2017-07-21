<?php

include_once ('connect.php');
//,$_POST['sub1'],$_POST['sub2'],$_POST['sub3'],$_POST['sub4'],$_POST['sub5'],$_POST['sub6'],$_POST['sub7'],$_POST['sub8']

if (isset($_POST['stud_adm'])){

    $stud_adm   = $_POST['stud_adm'];
    $sub1       = $_POST['sub1'];
    $sub2       = $_POST['sub2'];
    $sub3       = $_POST['sub3'];
    $sub4       = $_POST['sub4'];
    $sub5       = $_POST['sub5'];
    $sub6       = $_POST['sub6'];
    $sub7       = $_POST['sub7'];
    $sub8       = $_POST['sub8'];

    $query      = '';

    for ($count = 0; $count < count($stud_adm); $count++){

        $stud_adm_clean   = mysqli_real_escape_string($conn, $stud_adm[$count]);
        $sub1_clean       = mysqli_real_escape_string($conn, $sub1[$count]);
        $sub2_clean       = mysqli_real_escape_string($conn, $sub2[$count]) ;
        $sub3_clean       = mysqli_real_escape_string($conn, $sub3[$count]);
        $sub4_clean       = mysqli_real_escape_string($conn, $sub4[$count]);
        $sub5_clean       = mysqli_real_escape_string($conn, $sub5[$count]);
        $sub6_clean       = mysqli_real_escape_string($conn, $sub6[$count]);
        $sub7_clean       = mysqli_real_escape_string($conn, $sub7[$count]);
        $sub8_clean       = mysqli_real_escape_string($conn, $sub8[$count]);

        //check if value is not blank
        if ($stud_adm_clean!='' && $sub1_clean!='' && $sub2_clean!='' && $sub3_clean!=''
            && $sub4_clean!='' && $sub5_clean!='' && $sub6_clean!='' && $sub7_clean!='' && $sub8_clean!=''){

            //check if value if between 0 and 100
            if ($sub1_clean >= 0 && $sub1_clean <= 100 && $sub2_clean >= 0 && $sub2_clean <= 100 && $sub3_clean >= 0 && $sub3_clean <= 100 &&
                $sub4_clean >= 0 && $sub4_clean <= 100 && $sub5_clean >= 0 && $sub5_clean <= 100 && $sub6_clean >= 0 && $sub6_clean <= 100 &&
                $sub7_clean >= 0 && $sub7_clean <= 100 && $sub8_clean >= 0 && $sub8_clean <= 100){

                //check if value is integer
                /*if (is_integer($sub1_clean) && is_integer($sub2_clean) && is_integer($sub3_clean) && is_integer($sub4_clean) &&
                    is_integer($sub5_clean) && is_integer($sub6_clean) && is_integer($sub7_clean) && is_integer($sub8_clean)){*/

                    $query = "INSERT INTO `marks`(`stud_adm`,`sub1`,`sub2`,`sub3`,`sub4`,`sub5`,`sub6`,`sub7`,`sub8`) 
                          VALUES('$stud_adm_clean','$sub1_clean','$sub2_clean','$sub3_clean','$sub4_clean','$sub5_clean',
                          '$sub6_clean','$sub7_clean',$sub8_clean)";

                /*}else{
                    echo "<div class=\"alert alert-danger alert-block text-center\" role='alert'>
					<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
					<span class='fa fa-exclamation-circle'></span>
					&emsp;The marks must be of integer value.
				</div>";
                }*/

            }else{
                echo "<div class=\"alert alert-danger alert-block text-center\" role='alert'>
					<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
					<span class='fa fa-exclamation-circle'></span>
					&emsp;Cant allow marks to be more than 100% or less than 0%.
				</div>";
            }

        }else{

        }
    }
    if ($query != ''){

        if (mysqli_query($conn, $query)){
            echo "<div class=\"alert alert-success alert-block text-center\" role='alert'>
					<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
					<span class='fa fa-check-circle'></span>
					&emsp;Successfully inserted marks.
				</div>";
        }else{
            echo "<div class=\"alert alert-warning alert-block text-center\" role='alert'>
					<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
					<span class='fa fa-warning'></span>
					&emsp;<strong>".$stud_adm_clean."</strong>&nbsp;Already has some marks.
				</div>";
        }

    }else{
        echo "<div class=\"alert alert-danger alert-block text-center\" role='alert'>
                    <span class='fa fa-exclamation-circle'></span>
					<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
					&emsp;All fields are required.
				</div>";
    }
}

?>