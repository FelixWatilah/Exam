<?php
include "connect.php";

$result = mysqli_query($conn, "SELECT * FROM `student` ORDER BY `adm` ASC");

if ($result == true){
$total = mysqli_num_rows($result);

?>
<html>
<head>
    <!-- //CSS// -->
    <link rel="stylesheet" type="text/css" href="../frameworks/Bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../frameworks/fa/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../frameworks/jquery-ui/jquery-ui.min.js">
    <link rel="stylesheet" type="text/css" href="../frameworks/w3css/w3css.css">
    <link rel="stylesheet" type="text/css" href="../frameworks/materialdesign/css/materialdesignicons.min.css">
    <link rel="stylesheet" type="text/css" href="../frameworks/dataTable/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
</head>
<body>
<div class="panel panel-default bg">
    <div class="panel-body">
        <span class="col-md-3 text-center">
            <h1 class="text-center badge"><strong><?php echo $total; ?></strong></h1>
            <h6 class="text-muted">Registered Students</h6>
        </span>
        <span class="col-md-3 text-center">
            <h1 class="text-success badge"><strong>25</strong></h1>
            <h6 class="text-muted">Marks Entered</h6>
        </span>
        <span class="col-md-3 text-center">
            <h1 class="text-warning badge"><strong>23</strong></h1>
            <h6 class="text-muted">Passed</h6>
        </span>
        <span class="col-md-3 text-center">
            <h1 class="text-danger badge"><strong>2</strong></h1>
            <h6 class="text-muted">Failed</h6>
        </span>
    </div>
</div>
<div class="modal fade" id="edit_stud">
    <?php include "php/edit_stud.php"?>
</div><!-- end modal -->
<div class="panel panel-default">
    <div class="panel-heading">
        <small class="panel-title text-muted">Registered Students</small>
    </div>
    <div class="panel-body">
        <table class="table table-striped table-bordered table-hover table-condensed display" cellpadding="0" id="stud">
            <thead>
            <tr>
                <th>#</th>
                <th>Adm No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>DOB</th>
                <th>Gender</th>
                <th>YOS</th>
                <th>Type</th>
                <th>Residence</th>
                <th class='text-center'>Photo</th>
                <th class='text-center'>Action</th>
            </tr>
            </thead>

            <?php
            $edit_stud = '#edit_stud';

            $no = 0;
            while ($row = mysqli_fetch_assoc($result)){
                $no ++;
                echo "<tr>
                    <td class='text-center'>".$no."</td>
                    <td>".$row['adm']."</td>
                    <td>".strtoupper($row['name'])."</td>
                    <td>".$row['email']."</td>
                    <td>".$row['phone']."</td>
                    <td>".$row['dob']."</td>
                    <td>".$row['gender']."</td>
                    <td>".strtoupper($row['yos'])."</td>
                    <td>".strtoupper($row['type'])."</td>
                    <td>".strtoupper($row['residence'])."</td>
                    <td class='text-center'><img class='img-rounded' src='img/".$row['pic']."' width='50px' height='60px'/></td>
                    <td class='text-center'>
                        <a role='button' type='button' class='edit' id='".$row['adm']."'><i class='fa fa-2x fa-pencil text-success'></i></a>&emsp;
                        <a href='php/delete_stud.php?adm=".$row['adm']."'><i class='fa fa-2x fa-trash text-danger'></i></a>
                    </td>
                </tr>";
            }
            }
            ?>
        </table>
    </div>
</div>
<script type="text/javascript" src="../frameworks/jQuery/jquery-3.0.0.min.js"></script>
<script type="text/javascript" src="../frameworks/Bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="../frameworks/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="../frameworks/moment/moment.min.js"></script>
<script type="text/javascript" src="../frameworks/dataTable/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="../js/join_db.js"></script>
</body>
</html>