<!DOCTYPE html>
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
    <link rel="stylesheet" type="text/css" href="../frameworks/dataTable/ext/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
</head>
<body>
<div id="msg">

</div>
<div class="thumbnail table-responsive" id="res">
    <?php

    $conn = mysqli_connect('localhost','root','','exam');

    $user = mysqli_query($conn, "SELECT * FROM `users`");
    $user_count = mysqli_num_rows($user);

    echo "<table class='table table-hover table-striped table-responsive table-condensed display nowrap' cellpadding='0' id='lecturer'>
        <thead>
        <tr class='text-center bg-danger'>
            <th><label>#</label></th>
            <th><label>User Type</label></th>
            <th class='text-center'><label>Username</label></th>
            <th class='text-center'><label>Action</label></th>

</tr>
</thead>

<tbody class='table-striped'>";
    $edit_stud = '#edit_stud';

    $no = 0;
    while ($row = mysqli_fetch_array($user, MYSQLI_BOTH)){

        $no ++;
        echo "<tr>
        <td><strong>".htmlspecialchars($no)."</strong></td>
        <td>".htmlspecialchars(strtoupper($row['user_type']))."</td>
        <td class='text-center mk'>".$row['username']."</td>
        <td class='text-center'>
            <a href='".$edit_stud."?adm=".$row['username']."' role='button' data-toggle='modal' class='btn btn-sm btn-primary'><i class='fa fa-refresh'></i></a>&emsp;
            <a href='php/delete_stud.php?adm=".$row['username']."' class='btn btn-sm btn-danger'><i class='fa fa-trash'></i></a>
        </td>            
    </tr>";

    }
    echo "
</tbody>
</table>
<script>
$(document).ready(function() {
    $('#lecturer').DataTable( {
        dom: 'Bfrtip',
        buttons: [{
            extend: 'copyHtml5',
            text: '<i class=\"fa fa-copy text-warning\"></i>',
            title: 'Registered students',
            titleAttr:'Download Copy'
        },{
            extend: 'excelHtml5',
            text: '<i class=\"fa fa-file-excel-o text-success\"></i>',
            title: 'Registered students',
            titleAttr:'Download Excel'
        },{
            extend: 'csvHtml5',
            text: '<i class=\"fa fa-file-text-o text-primary\"></i>',
            title: 'Registered students',
            titleAttr:'Download Csv'
        },{
            extend: 'pdfHtml5',
            text: '<i class=\"fa fa-file-pdf-o text-danger\"></i>',
            title: 'Registered students',
            titleAttr:'Download Pdf'
        }
        ]
    });
});

</script>
";

    ?>
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
<script type="text/javascript" src="../js/custom.js"></script>
<script type="text/javascript" src="../js/join_db.js"></script>
<script type="text/javascript">
    $(document).ready(function () {

        //retrieve results based on dropdown selection
        function getResult(opts) {
            $.ajax({
                type    : "POST",
                data    : {opts:opts},
                url     : "php/registered.php",
                success : function (data) {
                    $('#res').html(data);
                }
            });
        }
        $('#class').on("change",function () {
            var selected = $(this).val();
            getResult(selected);
        });

        //edit databse values//
        $('td.mk').on('focusout',function () {
            data        = {};
            data['val'] = $(this).text();
            data['id']  = $(this).parent('tr').attr('data-row-id');
            data['index']= $(this).attr('col-index');

            if ($(this).attr('oldVal') === data['val'])
                return false;

            $.ajax({
                type    : "POST",
                url     : "php/marks_update.php",
                cache   : false,
                data    : data,
                dataType: "json",
                success : function (response) {

                    if (response.status){
                        $('#msg').removeClass('alert-danger');
                        $('#msg').addClass('alert-success').html(response.msg);
                    }else{
                        $('#msg').removeClass('alert-success');
                        $('#msg').addClass('alert-danger').html(response.msg);
                    }

                }
            });

        });

    });
</script>
<!--</body>
</html>-->