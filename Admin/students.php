<?php
//include "php/connect.php";

$conn = mysqli_connect('localhost','root','','exam');

$result = mysqli_query($conn, "SELECT * FROM `student` ORDER BY `adm` ASC");

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
    <!--<link rel="stylesheet" type="text/css" href="../frameworks/dataTable/css/dataTables.bootstrap.min.css">-->
    <link rel="stylesheet" type="text/css" href="../css/main.css">



</head>
<body>
<div>
    <?php //include "php/edit_stud.php"?>
</div>
<div class="thumbnail">
    <table class="table table-striped table-hover table-responsive table-condensed display" cellpadding="0" id="adminStud">
        <thead>
        <tr class="bg-warning">
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
            <th class='text-center'>Action</th>
        </tr>
        </thead>
        <tbody>

        <?php
        $edit_stud = '#edit_stud';

        $no = 0;
        while ($row = mysqli_fetch_assoc($result)){
            $no ++;
            echo "<tr>
                    <td class='text-center'><strong>".$no."</strong></td>
                    <td>".strtoupper($row['adm'])."</td>
                    <td>".ucfirst($row['name'])."</td>
                    <td>".strtolower($row['email'])."</td>
                    <td>".$row['phone']."</td>
                    <td>".$row['dob']."</td>
                    <td>".ucfirst($row['gender'])."</td>
                    <td>".ucfirst($row['yos'])."</td>
                    <td>".ucfirst($row['type'])."</td>
                    <td>".ucfirst($row['residence'])."</td>
                    <td class='text-center'>
                        <a role='button' type='button' class='edit btn btn-sm btn-primary' id='".$row['adm']."'>
                        <i class='fa fa-refresh'></i>
                        </a>&emsp;
                        <a href='php/delete_stud.php?adm=".$row['adm']."' onclick='return confirm(\"Are you sure you want to delete? \");' class='btn btn-sm btn-danger'>
                        <i class='fa fa-trash'></i>
                        </a>
                    </td>
                </tr>";
        }
        ?>
        </tbody>
    </table>
</div>
<script type="text/javascript" src="../frameworks/jQuery/jquery-3.0.0.min.js"></script>
<script type="text/javascript" src="../frameworks/Bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="../frameworks/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="../frameworks/moment/moment.min.js"></script>
<script type="text/javascript" src="../frameworks/dataTable/js/jquery.dataTables.min.js"></script>
<!--<script type="text/javascript" src="../frameworks/dataTable/js/dataTables.bootstrap.min.js"></script>-->
<script>
    $('#adminStud').dataTable();
    $(document).ready(function() {
     $('#studd').DataTable( {
     dom: 'Bfrtip',
     buttons: [{
     extend: 'copyHtml5',
     text: '<i class="fa fa-copy text-warning"></i>',
     titleAttr:'Download Copy'
     },{
     extend: 'excelHtml5',
     text: '<i class="fa fa-file-excel-o text-success"></i>',
     titleAttr:'Download Excel'
     },{
     extend: 'csvHtml5',
     text: '<i class="fa fa-file-text-o text-primary"></i>',
     titleAttr:'Download Csv'
     },{
     extend: 'pdfHtml5',
     text: '<i class="fa fa-file-pdf-o text-danger"></i>',
     titleAttr:'Download Pdf'
     }
     ]
     });
     });
</script>
<script type="text/javascript" src="../js/join_db.js"></script>
</body>
</html>