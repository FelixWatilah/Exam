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
<div class="container-fluid">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title text-center">Register for Units.</h4>
            </div>
            <div class="panel-body">
                <div class="row">
                    <form action="register_units.php" method="post" class="form-horizontal">
                        <?php
                        $conn = mysqli_connect('localhost','root','','exam');

                        echo "
                                <div class='col-md-6 text-center text-primary'>
                                  <div class=\"form-group\">
                                    <label class=\"col-md-3 control-label\" for=\"sub1\">Subject 1:</label>
                                    <div class=\"col-md-9\">
                                        <select class=\"form-control multi\" id=\"sub1\" name=\"sub1\">";
                        $sub = mysqli_query($conn, "SELECT * FROM `subject`");
                        while ($row = mysqli_fetch_array($sub, MYSQLI_BOTH)) {
                            echo "<option value='".$row['subject_name']."'>".$row['subject_name']."</option>";
                        }
                        echo "</select>
                                    </div>
                                </div>";
                        echo "
                                <div class=\"form-group\">
                                    <label class=\"col-md-3 control-label\" for=\"sub2\">Subject 2:</label>
                                    <div class=\"col-md-9\">
                                        <select class=\"form-control multi\" id=\"sub2\" name=\"sub2\">";
                        $sub = mysqli_query($conn, "SELECT * FROM `subject`");
                        while ($row = mysqli_fetch_array($sub, MYSQLI_BOTH)) {
                            echo "<option value='".$row['subject_name']."'>".$row['subject_name']."</option>";
                        }
                        echo "</select>
                                    </div>
                                </div>";
                        echo "
                                <div class=\"form-group\">
                                    <label class=\"col-md-3 control-label\" for=\"sub3\">Subject 3:</label>
                                    <div class=\"col-md-9\">
                                        <select class=\"form-control multi\" id=\"sub3\" name=\"sub3\">";
                        $sub = mysqli_query($conn, "SELECT * FROM `subject`");
                        while ($row = mysqli_fetch_array($sub, MYSQLI_BOTH)) {
                            echo "<option value='".$row['subject_name']."'>".$row['subject_name']."</option>";
                        }
                        echo "</select>
                                    </div>
                                </div>";
                        echo "
                                <div class=\"form-group\">
                                    <label class=\"col-md-3 control-label\" for=\"sub4\">Subject 4:</label>
                                    <div class=\"col-md-9\">
                                        <select class=\"form-control multi\" id=\"sub4\" name=\"sub4\">";
                        $sub = mysqli_query($conn, "SELECT * FROM `subject`");
                        while ($row = mysqli_fetch_array($sub, MYSQLI_BOTH)) {
                            echo "<option value='".$row['subject_name']."'>".$row['subject_name']."</option>";
                        }
                        echo "</select>
                                    </div>
                                </div>
                                </div>";
                        echo "
                                <div class='col-md-6 text-center text-primary'>
                                      <div class=\"form-group\">
                                            <label class=\"col-md-3 control-label\" for=\"sub5\">Subject 5:</label>
                                                <div class=\"col-md-9\">
                                                    <select class=\"form-control multi\" id=\"sub5\" name=\"sub5\">";
                        $sub = mysqli_query($conn, "SELECT * FROM `subject`");
                        while ($row = mysqli_fetch_array($sub, MYSQLI_BOTH)) {
                            echo "<option value='".$row['subject_name']."'>".$row['subject_name']."</option>";
                        }
                        echo "</select>
                                                                    </div>
                                                                </div>";
                        echo "
                                <div class=\"form-group\">
                                    <label class=\"col-md-3 control-label\" for=\"sub6\">Subject 6:</label>
                                    <div class=\"col-md-9\">
                                        <select class=\"form-control multi\" id=\"sub6\" name=\"sub6\">";
                        $sub = mysqli_query($conn, "SELECT * FROM `subject`");
                        while ($row = mysqli_fetch_array($sub, MYSQLI_BOTH)) {
                            echo "<option value='".$row['subject_name']."'>".$row['subject_name']."</option>";
                        }
                        echo "</select>
                                                        </div>
                                                    </div>";
                        echo "
                                <div class=\"form-group\">
                                    <label class=\"col-md-3 control-label\" for=\"sub7\">Subject 7:</label>
                                    <div class=\"col-md-9\">
                                        <select class=\"form-control multi\" id=\"sub7\" name=\"sub7\">";
                        $sub = mysqli_query($conn, "SELECT * FROM `subject`");
                        while ($row = mysqli_fetch_array($sub, MYSQLI_BOTH)) {
                            echo "<option value='".$row['subject_name']."'>".$row['subject_name']."</option>";
                        }
                        echo "</select>
                                                        </div>
                                                    </div>";
                        echo "
                                <div class=\"form-group\">
                                    <label class=\"col-md-3 control-label\" for=\"sub8\">Subject 8:</label>
                                    <div class=\"col-md-9\">
                                        <select class=\"form-control multi\" id=\"sub8\" name=\"sub8\">";
                        $sub = mysqli_query($conn, "SELECT * FROM `subject`");
                        while ($row = mysqli_fetch_array($sub, MYSQLI_BOTH)) {
                            echo "<option value='".$row['subject_name']."'>".$row['subject_name']."</option>";
                        }
                        echo "</select>
                                                        </div>
                                                    </div>
                                                    </div>";
                        ?>
                        <hr>
                        <div class="row">
                            <div class="form-group text-center">
                                <input type="submit" class="btn btn-success" value="Register">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title text-center">Registered Units</h4>
            </div>
            <div class="panel-body">
                <div class="thumbnail">
                    <table class="table table-responsive table-condensed table-hover table-striped">
                        <thead class="bg-danger">
                            <tr class="text-center">
                                <th class="text-center">#</th>
                                <th class="text-center">Unit</th>
                            </tr>
                        </thead>
                        <tfoot class="text-center">
                        <tr class="text-center">
                            <th class="text-center">#</th>
                            <th class="text-center">Unit</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        <?php
                        $units = mysqli_query($conn, "SELECT * FROM `registered` WHERE `stud_adm`='".$_SESSION['student']."'");
                        if ($units == true){
                            $un = mysqli_fetch_array($units, MYSQLI_BOTH);
                            echo "
                            <tr class=\"text-center\">
                                <td>1</td>
                                <td>".$un['sub_1']."</td>
                            </tr>
                            <tr class=\"text-center\">
                                <td>2</td>
                                <td>".$un['sub_2']."</td>
                            </tr>
                            <tr class=\"text-center\">
                                <td>3</td>
                                <td>".$un['sub_3']."</td>
                            </tr>
                            <tr class=\"text-center\">
                                <td>4</td>
                                <td>".$un['sub_4']."</td>
                            </tr>
                            <tr class=\"text-center\">
                                <td>5</td>
                                <td>".$un['sub_5']."</td>
                            </tr>
                            <tr class=\"text-center\">
                                <td>6</td>
                                <td>".$un['sub_6']."</td>
                            </tr>
                            <tr class=\"text-center\">
                                <td>7</td>
                                <td>".$un['sub_7']."</td>
                            </tr>
                            <tr class=\"text-center\">
                                <td>8</td>
                                <td>".$un['sub_8']."</td>
                            </tr>
                        ";
                        }
                        ?>
                        </tbody>
                    </table>
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
