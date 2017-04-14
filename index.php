<!DOCTYPE html>
<html>
<head>
    <title>Exam Unit</title>

    <!-- //CSS// -->
    <link rel="stylesheet" type="text/css" href="frameworks/Bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="frameworks/fa/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="frameworks/jquery-ui/jquery-ui.min.js">
    <link rel="stylesheet" type="text/css" href="frameworks/w3css/w3css.css">
    <link rel="stylesheet" type="text/css" href="frameworks/materialdesign/css/materialdesignicons.min.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
<?php include "includes/nav.inc.php"; ?>
<div class="row content">
    <div class="login">
        <div class="col-lg-3 col-md-3 col-sm-12"></div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <h4 class="panel-title"><i class="fa fa-user"></i>&nbsp;Lecturer Login</h4>
                </div>
                <div class="panel-body">
                    <form action="php/lec_login.php" class="form-horizontal" method="post">
                        <div class="form-group">
                            <label class="col-lg-3 col=md-3 col-sm-12" for="username">Username:</label>
                            <div class="col-lg-9 col-md-3 col-sm-12">
                                <input class="form-control" type="text" name="username" id="username" placeholder="Username">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 col=md-3 col-sm-12" for="password">Password:</label>
                            <div class="col-lg-9 col-md-3 col-sm-12">
                                <input class="form-control" type="password" name="password" id="password" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-9 col-md-3 col-sm-12">
                                <a href="pages/lec_dashboard.php" role="button">
                                    <input class="btn btn-success" type="submit" name="lec_submit" value="LOGIN">
                                </a>
                                <a href="pages/lec_dashboard.php" class="btn btn-link">Create Account</a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="panel-footer">
                    <h5 class="text-muted">Contact the Administrator on: +254 712423121 in case of any problem.</h5>
                </div>
            </div>
            <div >

            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12"></div>
    </div><!-- end login -->
</div>
</div>

<!-- //SCRIPT// -->
<script type="text/javascript" src="frameworks/jQuery/jquery-3.0.0.min.js"></script>
<script type="text/javascript" src="frameworks/Bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="frameworks/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="frameworks/moment/moment.min.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
</body>
</html>
