<?php
include "connect.php";

$opts = $_POST['opts'];

$result = mysqli_query($conn, "SELECT * FROM `registered` WHERE `sub_id`='$opts'");


echo "<table class='table table-hover table-striped table-condensed display nowrap' cellpadding='0' id='r'>
        <thead>
        <tr class='text-center bg-danger'>
            <th><label>#</label></th>
            <th><label>Adm No</label></th>
            <th class='text-center'><label>First</label></th>
            <th class='text-center'><label>Second</label></th>
            <th class='text-center'><label>Third</label></th>
            <th class='text-center'><label>Fourth</label></th>
            <th class='text-center'><label>Fifth</label></th>
            <th class='text-center'><label>Sixth</label></th>
            <th class='text-center'><label>Seventh</label></th>
            <th class='text-center'><label>Eighth</label></th>
            <th class='text-center'><label>Action</label></th>

</tr>
</thead>

<tbody class='table-striped'>";
$edit_stud = '#edit_stud';

$no = 0;
while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)){

    $no ++;
    echo "<tr>
        <td><strong>".htmlspecialchars($no)."</strong></td>
        <td>".htmlspecialchars(strtoupper($row['stud_adm']))."</td>
        <td class='text-center mk'>".$row['sub_1']."</td>
        <td class='text-center mk'>".$row['sub_2']."</td>
        <td class='text-center mk'>".$row['sub_3']."</td>
        <td class='text-center mk'>".$row['sub_4']."</td>
        <td class='text-center mk'>".$row['sub_5']."</td>
        <td class='text-center mk'>".$row['sub_6']."</td>
        <td class='text-center mk'>".$row['sub_7']."</td>
        <td class='text-center mk'>".$row['sub_8']."</td>
        <td class='text-center'>
            <a href='".$edit_stud."?adm=".$row['stud_adm']."' role='button' data-toggle='modal' class='btn btn-sm btn-primary'><i class='fa fa-refresh'></i></a>&emsp;
            <a href='php/delete_stud.php?adm=".$row['stud_adm']."' class='btn btn-sm btn-danger'><i class='fa fa-trash'></i></a>
        </td>            
    </tr>";

}
echo "
</tbody>
</table>
<script>
$(document).ready(function() {
    $('#r').DataTable( {
        dom: 'Bfrtip',
        buttons: [{
            extend: 'copyHtml5',
            text: '<i class=\"fa fa-copy text-warning\"></i>',
            titleAttr:'Download Copy'
        },{
            extend: 'excelHtml5',
            text: '<i class=\"fa fa-file-excel-o text-success\"></i>',
            titleAttr:'Download Excel'
        },{
            extend: 'csvHtml5',
            text: '<i class=\"fa fa-file-text-o text-primary\"></i>',
            titleAttr:'Download Csv'
        },{
            extend: 'pdfHtml5',
            text: '<i class=\"fa fa-file-pdf-o text-danger\"></i>',
            titleAttr:'Download Pdf'
        }
        ]
    });
});

</script>
";

?>