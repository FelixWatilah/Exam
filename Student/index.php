<?php

session_start();
if(!isset($_SESSION['student'])){
    header("Location:../index.php");
}

include "php/connect.php";

?>
<!DOCTYPE html>
<html>
<head>
    <title>Exam Unit</title>

    <!-- //CSS// -->
    <link rel="stylesheet" type="text/css" href="../frameworks/Bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../frameworks/fa/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../frameworks/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" type="text/css" href="../frameworks/w3css/w3css.css">
    <link rel="stylesheet" type="text/css" href="../frameworks/sumoselect/sumoselect.min.css">
    <link rel="stylesheet" type="text/css" href="../frameworks/materialdesign/css/materialdesignicons.min.css">
    <link rel="stylesheet" type="text/css" href="../frameworks/dataTable/css/jquery.dataTables.min.css">
    <!--<link rel="stylesheet" type="text/css" href="../frameworks/dataTable/css/dataTables.bootstrap.min.css">-->
    <link rel="stylesheet" type="text/css" href="../css/main.css">
</head>
<body>
<?php include ("inc/nav.inc.php"); ?>
<div class="container">
    <div class="row">
        <div class="thumbnail" id="lec_content">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title text-center"> <strong class="text-success">Results for <?php echo $_SESSION['student']; ?></strong></h4>
                </div>
                <div class="panel-body">
                    <div class="table">
                        <table class='table table-hover table-striped table-striped table-condensed display nowrap' cellpadding='0' id="y">
                            <thead class="text-center bg-danger">
                                <tr>
                                    <th class="text-center"><strong>#</strong></th>
                                    <th class="text-center">UNIT CODE</th>
                                    <th class="text-center">MARKS</th>
                                    <th class="text-center">GRADE</th>
                                </tr>
                            </thead>

                                <?php

                                if (isset($_SESSION['student'])){

                                    function grade($sub){
                                        if ($sub >= 70 && $sub <=100){
                                            return $grade = 'A ( Pass )';
                                        }elseif ($sub >= 60 && $sub <= 69){
                                            return $grade = 'B ( Pass )';
                                        }elseif ($sub >= 50 && $sub <= 59){
                                            return $grade = 'C ( Pass )';
                                        }elseif ($sub >= 40 && $sub <= 49){
                                            return $grade = 'D ( Pass )';
                                        }elseif ($sub >= 0 && $sub <=39){
                                            return $grade = 'E ( Fail )';
                                        }elseif ($sub < 0 && $sub > 100){
                                            return $grade = 'Value 0ut of range';
                                        }else{
                                            return $grade = '';
                                        }
                                    }

                                    function average($total){
                                        return $average = ($total/8);
                                    }

                                    $stud_adm = $_SESSION['student'];

                                    $result = mysqli_query($conn, "SELECT * FROM `marks` WHERE `stud_adm`='$stud_adm'");
                                    $subject = mysqli_query($conn, "SELECT * FROM `registered` WHERE `stud_adm`='$stud_adm'");

                                    if ($result == true){
                                        if ($subject == true){

                                            $row = mysqli_fetch_array($result, MYSQLI_BOTH);
                                            $sub = mysqli_fetch_array($subject, MYSQLI_BOTH);

                                            $total = ($row['sub1']+$row['sub2']+$row['sub3']+$row['sub4']+$row['sub5']+$row['sub6']+$row['sub7']+$row['sub8']);
                                            $avg = round(average($total),0);

                                            if ($row['stud_adm'] != '' && $sub['stud_adm'] != ''){

                                                echo "<tbody>
                                                    <tr class='text-center'>";
                                                        echo "<td><strong>1</strong></td>
                                                        <td>".$sub['sub_1']."</td>
                                                        <td>".$row['sub1']."</td>
                                                        <td>".grade($row['sub1'])."</td>
                                                        </tr>    
                                                        <tr class='text-center'>
                                                            <td><strong>2</strong></td>
                                                            <td>".$sub['sub_2']."</td>
                                                            <td>".$row['sub2']."</td>
                                                            <td>".grade($row['sub2'])."</td>
                                                        </tr>
                                                        <tr class='text-center'>
                                                            <td><strong>3</strong></td>
                                                            <td>".$sub['sub_3']."</td>
                                                            <td>".$row['sub3']."</td>
                                                            <td>".grade($row['sub3'])."</td>
                                                        </tr>
                                                        <tr class='text-center'>
                                                            <td><strong>4</strong></td>
                                                            <td>".$sub['sub_4']."</td>
                                                            <td>".$row['sub4']."</td>
                                                            <td>".grade($row['sub4'])."</td>
                                                        </tr>
                                                        <tr class='text-center'>
                                                            <td><strong>5</strong></td>
                                                            <td>".$sub['sub_5']."</td>
                                                            <td>".$row['sub5']."</td>
                                                            <td>".grade($row['sub5'])."</td>
                                                        </tr>
                                                        <tr class='text-center'>
                                                            <td><strong>6</strong></td>
                                                            <td>".$sub['sub_6']."</td>
                                                            <td>".$row['sub6']."</td>
                                                            <td>".grade($row['sub6'])."</td>
                                                        </tr>
                                                        <tr class='text-center'>
                                                            <td><strong>7</strong></td>
                                                            <td>".$sub['sub_7']."</td>
                                                            <td>".$row['sub7']."</td>
                                                            <td>".grade($row['sub7'])."</td>
                                                        </tr>
                                                        <tr class='text-center'>
                                                            <td><strong>8</strong></td>
                                                            <td>".$sub['sub_8']."</td>
                                                            <td>".$row['sub8']."</td>
                                                            <td>".grade($row['sub8'])."</td>
                                                        </tr>
                                                        </tbody>
                                                        <tfoot>
                                                            <tr class='text-center success'>
                                                                <td><strong>-|=|-</strong></td>
                                                                <td><strong>AVERAGE</strong></td>
                                                                <td><strong>".$avg."</strong></td>
                                                                <td><strong>".grade($avg)."</strong></td>
                                                            </tr>
                                                        </tfoot>";
                                            }else{
                                                echo "<tbody>
                                                            <tr class='text-center alert alert-danger alert-block fade in'>
                                                            <h4 class='text-center text-danger'>
                                                            <strong>
                                                            <i class='fa fa-warning'></i>&emsp;You might have not done the exams for this semester
                                                            </strong>
                                                            </h4>
                                                                <h6 class='text-center text-danger'>Please Contact Your Lecturer for the missing marks.</h6>
                                                            </tr>
                                                        </tbody>";
                                            }
                                        }
                                    }else{
                                        echo mysqli_error($conn);
                                    }
                                }

                                ?>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- //SCRIPT// -->
<script type="text/javascript" src="../frameworks/jQuery/jquery-3.0.0.min.js"></script>
<script type="text/javascript" src="../frameworks/Bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../frameworks/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="../frameworks/moment/moment.min.js"></script>
<script type="text/javascript" src="../frameworks/sumoselect/jquery.sumoselect.min.js"></script>
<script type="text/javascript" src="../frameworks/dataTable/js/jquery.dataTables.min.js"></script>
<!--<script type="text/javascript" src="../frameworks/dataTable/js/dataTables.bootstrap.min.js"></script>-->
<script>
    $(document).ready(function() {
        $('#y').DataTable();
    });

</script>
<script type="text/javascript" src="../js/custom.js"></script>
<script type="text/javascript" src="../js/join_db.js"></script>
</body>
</html>