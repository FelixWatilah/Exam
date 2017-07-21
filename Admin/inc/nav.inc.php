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
                        <input type="button" class="btn btn-success" name="class" id="c_class" value="Save Changes">
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
            <a href="" class="navbar-brand w3-text-white"><i class="fa fa-dashboard"></i>&emsp;<strong>Admin Dashboard</strong></a>
        </div><!-- end navbar-header -->
        <!--<div class="nav-collapse collapse nav-responsive-collapse">-->

        <!--<ul class="nav navbar-nav side_nav text-center">
            <li><a href="../Lecturer/php/registered_units.php" class="lec"><span class="fa fa-th-list"></span>&emsp;Registered Units</a></li>
            <li><a href="results.php" class="lec"><span class="fa fa-book"></span>&emsp;Results</a></li>
            <li><a href="lec_notes.php" class="lec"><span class="fa fa-list"></span>&emsp;Notes</a></li>
        </ul>-->
        <ul class="nav navbar-nav navbar-right side_nav">
            <li class="dropdown">
                <a class="dropdown-toggle w3-text-white" data-toggle="dropdown" href="#">
                    <strong><i class="fa fa-user-circle"></i>&emsp;<?php echo ucfirst($_SESSION['admin']); ?>&emsp;<span class="caret"></span></strong>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="php/logout.php"><span class="fa fa-power-off"></span>&emsp;Logout</a></li>
                </ul>
            </li>
        </ul>
        </div><!--end nav-collapse-->
    </div>
</nav><!-- end navbar-default -->