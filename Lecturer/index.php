<?php

session_start();

if(!isset($_SESSION['lecturer'])){
    header("Location:../index.php");
}

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
    <link rel="stylesheet" type="text/css" href="../frameworks/calendar/zabuto_calendar.min.css">
    <!--<link rel="stylesheet" type="text/css" href="../frameworks/dataTable/css/dataTables.bootstrap.min.css">-->
    <link rel="stylesheet" type="text/css" href="../css/main.css">
</head>
<body>
<?php include "inc/nav.inc.php"; ?>
<div class="modal fade" id="add_unit">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <span class="modal-title">
                    <strong>
                        <button role="button" class="close fa fa-2x fa-times-circle" data-dismiss="modal"></button>
                        <h4 class="text-center">Add Unit</h4>
                    </strong>
                </span>
            </div><!-- end modal-footer -->
            <div class="modal-body">
                <form class="form-horizontal" action="php/add_unit.php" onsubmit='return confirm("Are you sure you want to Add this subject?");' method="post">
                    <div class="row">
                        <div id="u_info"></div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="control-label col-md-3" for="unit_code">Unit Code:</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="unit_code" name="unit_code" placeholder="ICS 2000">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="unit_name">Unit Name:</label>
                                <div class="col-md-9">
                                    <input class="form-control" type="text" id="unit_name" name="unit_name" placeholder="Project Management">
                                </div>
                            </div>
                        </div><!-- end col-lg-6 -->
                    </div><!-- end row -->
                    <hr>
                    <div class="row text-center" id="modal_buttons">
                        <input type="submit" class="btn btn-success" name="update" value="Add Unit" id="update">
                    </div><!-- end row -->
                </form><!-- end form -->
            </div><!-- end modal-body -->
            <div class="modal-footer bg-danger">
                <small class="text-center text-danger">
                    Coded By: <i class="fa fa-heart text-success"></i><strong class="text-muted"> F.Watilah</strong>
                </small>
            </div>
        </div><!-- end modal-content -->
    </div><!-- end modal-dialog -->
</div><!-- end modal -->
<div class="content">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="row" id="lec_content">
            <div class="panel panel-default bg">
                <div class="panel-body">
                    <form action="#" class="form form-horizontal" method="post">
                        <fieldset>
                            <legend class="col-form-legend">
                                <strong>Options</strong><small class="text-muted">&emsp;(Class, Year, Semester, Unit)</small>
                            </legend>
                            <div class=text-center">
                                <div class="col-md-2 col-sm-12">
                                    <div class="form-group">
                                        <label for="myear" class="control-label col-md-3">Year:</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="myear" name="myear" placeholder="2017">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-12">
                                    <div class="form-group">
                                        <label for="class" class="control-label col-md-3">Class:</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="class" name="class">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-12">
                                    <div class="form-group">
                                        <label for="semester" class="control-label col-md-3">Sem:</label>
                                        <div class="col-md-9">
                                            <select name="semester" id="semester" class="form-control">
                                                <option value="one" selected>One</option>
                                                <option value="two">Two</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-12">
                                    <div class="form-group">
                                        <label for="unit" class="control-label col-md-3">Unit:</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="unit" name="unit">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-12">
                                    <div class="form-group">
                                        <label for="unit" class="control-label col-md-3">Unit:</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="unit" name="unit">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-12">
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-success" value="Submit" name="submit">
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-body">
                    <table class="table table-hover table-striped table-condensed" id="stud">
                        <thead>
                            <tr class="danger">
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>3</td>
                                <td>Jocelyne</td>
                                <td>jose@gmail.com</td>
                                <td>0712423121</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Felix</td>
                                <td>fwatilah@gmail.com</td>
                                <td>0712423121</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Darren</td>
                                <td>darren@gmail.com</td>
                                <td>0712423121</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Jocelyne</td>
                                <td>jose@gmail.com</td>
                                <td>0712423121</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Felix</td>
                                <td>fwatilah@gmail.com</td>
                                <td>0712423121</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Darren</td>
                                <td>darren@gmail.com</td>
                                <td>0712423121</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
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
<script type="text/javascript" src="../frameworks/sumoselect/jquery.sumoselect.min.js"></script>
<script type="text/javascript" src="../frameworks/dataTable/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="../frameworks/calendar/zabuto_calendar.min.js"></script>
<!--<script type="text/javascript" src="../frameworks/dataTable/js/dataTables.bootstrap.min.js"></script>-->
<script>
    $('#stud').dataTable();
    /*$(document).ready(function() {
        $('#stud').dataTable( {
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
    });*/

</script>
<script type="application/javascript">
    $(document).ready(function () {
        $("#dobb").zabuto_calendar();
    });
</script>
<script type="text/javascript" src="../js/custom.js"></script>
<script type="text/javascript" src="js/add.js"></script>
<script type="text/javascript" src="../js/join_db.js"></script>

</body>
</html>
</html>