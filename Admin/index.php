<?php

session_start();
if(!isset($_SESSION['admin'])){
    header("Location:../index.php");
}

include "../php/db/connect.php";

//select results
$stu= mysqli_query($conn, "SELECT * FROM `marks` ORDER BY `stud_adm`");
$stu_count = mysqli_num_rows($stu);

//select students
$stud = mysqli_query($conn, "SELECT * FROM `student` ORDER BY `adm` ASC");
$stud_count = mysqli_num_rows($stud);

//select registered units
$unit = mysqli_query($conn, "SELECT * FROM `registered`");
$unit_count = mysqli_num_rows($unit);

//select users
$user = mysqli_query($conn, "SELECT * FROM `users`");
$user_count = mysqli_num_rows($user);

?>
<!DOCTYPE html>
<html>
<head>
    <title>Exam Unit</title>

    <!-- //CSS// -->
    <link rel="stylesheet" type="text/css" href="../frameworks/Bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../frameworks/fa/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../frameworks/jquery-ui/jquery-ui.min.js">
    <link rel="stylesheet" type="text/css" href="../frameworks/w3css/w3css.css">
    <link rel="stylesheet" type="text/css" href="../frameworks/materialdesign/css/materialdesignicons.min.css">
    <link rel="stylesheet" type="text/css" href="../frameworks/dataTable/css/jquery.dataTables.min.css">
    <!--<link rel="stylesheet" type="text/css" href="../frameworks/dataTable/css/dataTables.bootstrap.min.css">-->
    <link rel="stylesheet" type="text/css" href="../frameworks/dataTable/ext/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
</head>
<body>
<?php include ("inc/nav.inc.php"); ?>
<div class="container-fluid">
    <div>
        <div class="panel panel-default">
            <div class="panel-heading text-center">
                <div class="row panel-title">
                    <div class="col-md-2">
                        <h2><strong><span class="label label-default"><?php echo $stu_count; ?></span></strong></h2>
                        <a href="index.php">
                            <small class="badge danger"><i class="fa fa-th-list"></i>&emsp;Results</small>
                        </a>
                    </div>
                    <div class="col-md-2 text-warning">
                        <h2><strong><span class="label label-warning"><?php echo $stud_count; ?></span></strong></h2>
                        <a href="students.php" class="lec">
                            <small class="badge"><i class="fa fa-users"></i>&emsp;Students</small>
                        </a>
                    </div>
                    <div class="col-md-2 text-primary">
                        <h2><strong><span class="label label-primary"><?php echo $unit_count; ?></span></strong></h2>
                        <a href="units.php" class="lec">
                            <small class="badge"><i class="fa fa-book"></i>&emsp;Units</small>
                        </a>
                    </div>
                    <div class="col-md-2 text-info">
                        <h2><strong><span class="label label-info"><?php echo $user_count; ?></span></strong></h2>
                        <a href="lecturers.php" class="lec">
                            <small class="badge"><i class="fa fa-user-circle"></i>&emsp;Users</small>
                        </a>
                    </div>
                    <div class="col-md-2 text-success">
                        <h2><strong><span class="label label-success">53</span></strong></h2>
                        <a href="passed.php">
                            <small class="badge"><i class="fa fa-check"></i>&emsp;Passed</small>
                        </a>
                    </div>
                    <div class="col-md-2 text-danger">
                        <h2><strong><span class="label label-danger">52</span></strong></h2>
                        <a href="failed">
                            <small class="badge"><i class="fa fa-times"></i>&emsp;Failed</small>
                        </a>
                    </div>
                </div>
            </div>

            <div class="panel-body" id="lec_content">
                <div class="thumbnail table-responsive" id="ress">
                    <?php

                    echo "<table class='table table-hover table-striped table-bordered table-condensed display' cellpadding='0' id='adminResult'>
        <thead>
        <tr class='text-center bg-danger'>
            <th><label>#</label></th>
            <th><label>Adm No</label></th>
            <th class='text-center'>Subject 1</th>
            <th class='text-center'>Subject 2</th>
            <th class='text-center'>Subject 3</th>
            <th class='text-center'>Subject 4</th>
            <th class='text-center'>Subject 5</th>
            <th class='text-center'>Subject 6</th>
            <th class='text-center'>Subject 7</th>
            <th class='text-center'>Subject 8</th>
            <th class='text-center'>AVG</th>
        </tr>
</thead>
<tbody class='table-striped'>";
                    $edit_stud = '#edit_stud';

                    $no = 0;

                    //function to grade marks
                    function grade($sub){
                        if ($sub >= 70 && $sub <= 100){
                            return $grade = 'A';
                        }elseif ($sub >= 60 && $sub <= 69){
                            return $grade = 'B';
                        }elseif ($sub >= 50 && $sub <= 59){
                            return $grade = 'C';
                        }elseif ($sub >= 40 && $sub <= 49){
                            return $grade = 'D';
                        }elseif ($sub >= 0 && $sub <=39){
                            return $grade = 'E';
                        }elseif ($sub < 0 && $sub > 100){
                            return $grade = 'Value 0ut of range';
                        }else{
                            return $grade = '';
                        }
                    }

                    //function to calculate average
                    function average($total){
                        return ($total/8);
                    }

                    while ($st = mysqli_fetch_assoc($stu)){

                        //calculate total for each student
                        $total = ($st['sub1']+$st['sub2']+$st['sub3']+$st['sub4']+$st['sub5']+$st['sub6']+$st['sub7']+$st['sub8']);

                        //assigned returned value to $average and round off to 0 decimal place
                        $average = round(average($total),0);

                        $no ++;
                        echo "<tr>
        <td><strong>".htmlspecialchars($no)."</strong></td>
        <td><strong>".htmlspecialchars(strtoupper($st['stud_adm']))."</strong></td>
        <td class='text-center mk'>".$st['sub1']."&nbsp;".grade($st['sub1'])."</td>
        <td class='text-center mk'>".$st['sub2']."&nbsp;".grade($st['sub2'])."</td>
        <td class='text-center mk'>".$st['sub3']."&nbsp;".grade($st['sub3'])."</td>
        <td class='text-center mk'>".$st['sub4']."&nbsp;".grade($st['sub4'])."</td>
        <td class='text-center mk'>".$st['sub5']."&nbsp;".grade($st['sub5'])."</td>
        <td class='text-center mk'>".$st['sub6']."&nbsp;".grade($st['sub6'])."</td>
        <td class='text-center mk'>".$st['sub7']."&nbsp;".grade($st['sub7'])."</td>
        <td class='text-center mk'>".$st['sub8']."&nbsp;".grade($st['sub8'])."</td>
        <td class='text-center mk'><strong>".$average."&nbsp;".grade($average)."</strong></td>           
    </tr>";
                    }
                    echo "
</tbody>
</table>
<div class='form-group text-center'>
<!--<input type='button' class='btn btn-success' name='save' onclick='return confirm(\"Are you sure you want to save marks for the student?\");' id='save' value='Save'>-->
</div>";?>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- //SCRIPT// -->
<script type="text/javascript" src="../frameworks/jQuery/jquery-3.0.0.min.js"></script>
<script type="text/javascript" src="../frameworks/Bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="../frameworks/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="../frameworks/moment/moment.min.js"></script>
<script type="text/javascript" src="../frameworks/dataTable/js/jquery.dataTables.min.js"></script>
<!--<script type="text/javascript" src="../frameworks/dataTable/js/dataTables.bootstrap.min.js"></script>-->
<script type="text/javascript" src="../frameworks/dataTable/ext/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="../frameworks/dataTable/ext/buttons.flash.min.js"></script>
<script type="text/javascript" src="../frameworks/dataTable/ext/pdfmake.min.js"></script>
<script type="text/javascript" src="../frameworks/dataTable/ext/jszip.min.js"></script>
<script type="text/javascript" src="../frameworks/dataTable/ext/vfs_fonts.js"></script>
<script type="text/javascript" src="../frameworks/dataTable/ext/buttons.html5.min.js"></script>
<script>
    $(document).ready(function() {
        $('#adminResult').DataTable( {
            dom: 'Bfrtip',
            buttons: [{
                extend: 'copyHtml5',
                text: '<i class="fa fa-copy text-warning"></i>',
                title: 'Results',
                orientation: 'landscape',
                titleAttr:'Copy table'
            },
                {
                    extend: 'excelHtml5',
                    text: '<i class="fa fa-file-excel-o text-success"></i>',
                    title: 'Results',
                    orientation: 'landscape',
                    titleAttr:'Download Excel'
                },
                {
                    extend: 'csvHtml5',
                    text: '<i class="fa fa-file-text-o text-primary"></i>',
                    title: 'Results',
                    orientation: 'landscape',
                    titleAttr:'Download Csv'
                },
                {
                    extend: 'pdfHtml5',
                    orientation: 'landscape',
                    pageSize: 'LEGAL',
                    /*exportOptions: {
                     columns [0, 1, 2, 3, 4, 5, 6, 7, 8, 9]
                     }*/
                    text: '<i class="fa fa-file-pdf-o text-danger"></i>',
                    title: 'Results',
                    titleAttr:'Download Pdf'
                }

            ]
        });
    });

</script>
<script type="text/javascript" src="../js/custom.js"></script>
<script type="text/javascript" src="../js/join_db.js"></script>
</body>
</html>