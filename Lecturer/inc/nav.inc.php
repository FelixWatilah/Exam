<div class="modal fade" id="add_class">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button role="button" class="close fa fa-2x fa-times-circle" data-dismiss="modal"></button>
                <h6 class="modal-title text-center">Please Add a Class.</h6>
            </div>
            <div class="modal-body">
                <div id="c_info" class="text-center"></div>
                <form class="form-horizontal">
                    <div class="form-group">
                        <label for="c_name" class="col-lg-3 col-md-3 col-sm-12 control-label">Class Name:</label>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                            <input type="text" class="form-control" id="c_name" name="c_name" placeholder="First Year">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="c_num" class="col-lg-3 col-md-3 col-sm-12 control-label">Numeric Name:</label>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                            <input type="text" class="form-control" id="c_num" name="c_num" placeholder="1">
                        </div>
                    </div>
                    <hr>
                    <div class="form-group text-center">
                        <input type="button" class="btn btn-success" name="class" id="c_class" value="Add Class">
                        <input type="button" data-dismiss="modal" class="btn btn-danger" name="class" id="c_class" value="Close">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
<nav class="navbar w3-text-white" id="navbar">
    <div class="container">
        <button class="navbar-toggle" data-target=".nav-responsive-collapse" data-toggle="collapse" type="button">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <div class="navbar-header">
            <a href="" class="navbar-brand w3-text-white"><strong>EXAMINATION SYSTEM</strong></a>
        </div><!-- end navbar-header -->
        <!--<div class="nav-collapse collapse nav-responsive-collapse">-->
        <ul class="nav navbar-nav side_nav">
            <li class="dropdown">
                <a class="dropdown-toggle w3-text-white" data-toggle="dropdown" href="#">
                    <strong><i class="fa fa-users"></i>&emsp;Class&emsp;<span class="caret"></span>
                    </strong>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="#add_class" data-toggle="modal"><i class="fa fa-plus-circle"></i>&emsp;Add Class</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle w3-text-white" data-toggle="dropdown" href="#"><strong><i class="fa fa-folder-open"></i>&emsp;Units&emsp;<span class="caret"></span></strong></a>
                <ul class="dropdown-menu">
                    <li><a href="#add_unit" data-toggle="modal"><i class="fa fa-plus-circle"></i>&emsp;Add Unit</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle w3-text-white" data-toggle="dropdown" href="#">
                    <strong><i class="fa fa-graduation-cap"></i>&emsp;Student&emsp;<span class="caret"></span></strong>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="lec_add_student.php" class="lec"><i class="fa fa-plus-circle"></i>&emsp;Add Student</a></li>
                    <li><a href="lec_view_student.php" class="lec"><i class="fa fa-book"></i>&emsp;Manage Student</a></li>
                </ul>
            </li>
            <li><a href="lec_registered.php" class="lec"><span class="fa fa-th-list"></span>&emsp;Registered</a></li>
            <li><a href="lec_results.php" class="lec"><span class="fa fa-book"></span>&emsp;Results</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right side_nav">
            <li class="dropdown">
                <a class="dropdown-toggle w3-text-white" data-toggle="dropdown" href="#">
                    <strong><i class="fa fa-user-circle"></i>&emsp;<?php echo $_SESSION['lecturer'] ?>&emsp;<span class="caret"></span></strong>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="php/logout.php"><span class="fa fa-power-off"></span>&emsp;Logout</a></li>
                </ul>
            </li>
        </ul>
        </div><!--end nav-collapse-->
    </div>
</nav><!-- end navbar-default -->