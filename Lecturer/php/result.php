<?php
include "connect.php";

$opts = $_POST['opts'];

if ($opts == 'first'){
    $class = 1;
}elseif ($opts == 'second'){
    $class = 2;
}elseif ($opts == 'third'){
    $class = 3;
}elseif ($opts == 'fourth'){
    $class = 4;
}elseif ($opts == 'fifth'){
    $class = 5;
}else{
    $class = 0;
}

$result = mysqli_query($conn, "SELECT * FROM `registered` WHERE `sub_id`='$class'");
$row = mysqli_fetch_array($result, MYSQLI_BOTH);

echo "<table class='table table-hover table-striped table-bordered table-condensed display' cellpadding='0' id='result'>
        <thead>
        <tr class='text-center bg-danger'>
            <th><label>#</label></th>
            <th><label>Adm No</label></th>
            <th class='text-center'>".$row[3]."</th>
            <th class='text-center'>".$row[4]."</th>
            <th class='text-center'>".$row[5]."</th>
            <th class='text-center'>".$row[6]."</th>
            <th class='text-center'>".$row[7]."</th>
            <th class='text-center'>".$row[8]."</th>
            <th class='text-center'>".$row[9]."</th>
            <th class='text-center'>".$row[10]."</th>
            <th class='text-center'><label>Action</label></th>
        </tr>
</thead>
<tbody class='table-striped'>";
    $edit_stud = '#edit_stud';

    $stu= mysqli_query($conn, "SELECT * FROM `registered` WHERE `sub_id`='$class'");
    $no = 0;
    while ($st = mysqli_fetch_array($stu, MYSQLI_BOTH)){

        $no ++;
        echo "<tr>
        <td class='no'><strong>".htmlspecialchars($no)."</strong></td>
        <td class='stud_adm'>".htmlspecialchars(strtoupper($st['stud_adm']))."</td>
        <td contenteditable='true' class='text-center mk sub1'></td>
        <td contenteditable='true' class='text-center mk sub2'></td>
        <td contenteditable='true' class='text-center mk sub3'></td>
        <td contenteditable='true' class='text-center mk sub4'></td>
        <td contenteditable='true' class='text-center mk sub5'></td>
        <td contenteditable='true' class='text-center mk sub6'></td>
        <td contenteditable='true' class='text-center mk sub7'></td>
        <td contenteditable='true' class='text-center mk sub8'></td>
        <td class='text-center'>
            <a href='".$edit_stud."?adm=".$row['stud_adm']."' role='button' data-toggle='modal' class='btn btn-sm btn-primary'><i class='fa fa-refresh'></i></a>&emsp;
            <a href='php/delete_stud.php?adm=".$row['stud_adm']."' class='btn btn-sm btn-danger'><i class='fa fa-trash'></i></a>
        </td>            
    </tr>";
}
echo "
</tbody>
</table>
<div class='form-group text-center'>
<input type='button' class='btn btn-success' name='save' onclick='return confirm(\"Are you sure you want to save marks for the student?\");' id='save' value='Save'>
</div>
<script>
$(document).ready(function() {
    $('#result').DataTable( {
        dom: 'Bfrtip',
        buttons: [{
            extend: 'copyHtml5',
            text: '<i class=\"fa fa-copy text-warning\"></i>',
            title: 'Results',
            orientation: 'landscape',
            titleAttr:'Download Copy'
        },
        {
            extend: 'excelHtml5',
            text: '<i class=\"fa fa-file-excel-o text-success\"></i>',
            title: 'Results',
            orientation: 'landscape',
            titleAttr:'Download Excel'
        },
        {
            extend: 'csvHtml5',
            text: '<i class=\"fa fa-file-text-o text-primary\"></i>',
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
            text: '<i class=\"fa fa-file-pdf-o text-danger\"></i>',
            title: 'Results',
            titleAttr:'Download Pdf'
        }
        
        ]
    });
});

</script>
<script type='text/javascript'>
$(document).ready(function() {
    
  $('#save').click(function() {
      var no = $('.no').val();
      var stud_adm = [];
      var sub1 = [];
      var sub2 = [];
      var sub3 = [];
      var sub4 = [];
      var sub5 = [];
      var sub6 = [];
      var sub7 = [];
      var sub8 = []; 
    
    //capture value of each admission number and put it in array
    $('.stud_adm').each(function() {
      stud_adm.push($(this).text());
    });
    
    //capture value of each subject and put it in array
    $('.sub1').each(function() {
      sub1.push($(this).text());
    });
    
    $('.sub2').each(function() {
      sub2.push($(this).text());
    });
    
    $('.sub3').each(function() {
      sub3.push($(this).text());
    });
    
    $('.sub4').each(function() {
      sub4.push($(this).text());
    });
    
    $('.sub5').each(function() {
      sub5.push($(this).text());
    });
    
    $('.sub6').each(function() {
      sub6.push($(this).text());
    });
    
    $('.sub7').each(function() {
      sub7.push($(this).text());
    });
    
    $('.sub8').each(function() {
      sub8.push($(this).text());
    });
    
    $.ajax({
        url     : 'php/marks_update.php',
        method  : 'POST',
        data    : {stud_adm:stud_adm,sub1:sub1,sub2:sub2,sub3:sub3,sub4:sub4,sub5:sub5,sub6:sub6,sub7:sub7,sub8:sub8},
        success : function(data) {
            
            $('#msg').html(data).slideDown(2000).delay(1000).slideUp(2000);
          
        }
    });
    
  });
  
});
</script>
";
?>