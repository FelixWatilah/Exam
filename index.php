<!DOCTYPE html>
<html>
<head>
    <title>Exam Unit</title>

    <!-- //CSS// -->
    <!--<link rel="stylesheet" type="text/css" href="frameworks/Bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="frameworks/jquery-ui/jquery-ui.min.js">-->
    <link rel="stylesheet" type="text/css" href="frameworks/fa/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="frameworks/materialize/css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="frameworks/w3css/w3css.css">
    <link rel="stylesheet" type="text/css" href="frameworks/materialdesign/css/materialdesignicons.min.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
<?php include "includes/nav.inc.php"; ?>
<div class="row content">
    <div class="login">
        <div class="col l3 m3 s12"></div>
        <div class="col l6 m6 s12">
            <div class="card teal-text">
                <div class="card-content">
                    <span class="card-title center w3-text-grey">Choose Type of User</span>
                    <div class="divider"></div>
                    <div class="row">
                        <div class="col l12 m12 s12">
                            <ul class="tabs">
                                <li class="tab col s4"><a href="#student" name="user_type">Student</a></li>
                                <li class="tab col s4"><a href="#lecturer" name="user_type">Lecturer</a></li>
                                <li class="tab col s4"><a href="#admin" name="user_type">Admin</a></li>
                            </ul>
                        </div>
                        <div id="student" class="col l12 m12 s12">
                            <form action="#">
                                <div class="row">
                                    <div class="input-field col l12 m12 s12">
                                        <input id="disabled" type="text" name="adm_no" class="validate">
                                        <label for="disabled">Admission Number</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col l12 m12 s12">
                                        <input id="password" type="password" name="stud_pass" class="validate">
                                        <label for="password">Password</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <a class="waves-effect waves-light btn left" role="button" name="stud_submit" type="submit">Login</a>
                                    <a class="waves-effect waves-light btn right" role="button">Forgot Password</a>
                                </div>
                            </form>
                        </div>
                        <div id="lecturer" class="col l12 m12 s12">
                            <form action="#">
                                <div class="row">
                                    <div class="input-field col l12 m12 s12">
                                        <input id="disabled" type="text" name="lec_number" class="validate">
                                        <label for="disabled">Lecturer Number</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col l12 m12 s12">
                                        <input id="password" type="password" name="lec_pass" class="validate">
                                        <label for="password">Password</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <a class="waves-effect waves-light btn left" role="button" name="lec_submit" type="submit">Login</a>
                                    <a class="waves-effect waves-light btn right">Forgot Password</a>
                                </div>
                            </form>
                        </div>
                        <div id="admin" class="col l12 m12 s12">
                            <form action="#">
                                <div class="row">
                                    <div class="input-field col l12 m12 s12">
                                        <input id="disabled" type="text" name="admin" class="validate">
                                        <label for="disabled">Username</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col l12 m12 s12">
                                        <input id="password" type="password" name="admin_pass" class="validate">
                                        <label for="password">Password</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <a class="waves-effect waves-light btn left" name="admin_submit" role="button" type="submit">Login</a>
                                    <a class="waves-effect waves-light btn right">Forgot Password</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col l3 m3 s12"></div>
    </div><!-- end login -->
</div>
</div>

<!-- //SCRIPT// -->
<script type="text/javascript" src="frameworks/jQuery/jquery-3.0.0.min.js"></script>
<script type="text/javascript" src="frameworks/materialize/js/materialize.min.js"></script>
<!--<script type="text/javascript" src="frameworks/Bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="frameworks/jquery-ui/jquery-ui.min.js"></script>-->
<script type="text/javascript" src="frameworks/moment/moment.min.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
</body>
</html>
