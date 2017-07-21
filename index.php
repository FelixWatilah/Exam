<?php

session_start();
if(isset($_SESSION['student'])){

    header("Location:Student/index.php");

}elseif(isset($_SESSION['lecturer'])){

    header("Location:Lecturer/index.php");

}elseif(isset($_SESSION['admin'])){

    header("Location:Admin/index.php");
}
?>
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
    <style type="text/css">
        .chip{
            background-color: #F68DC1;
        }
        .chip:hover{
            background-color: #286090;
        }
    </style>
</head>
<body>
<?php include "includes/nav.inc.php"; ?>
<div class="row content">
    <div class="login">
        <div class="col l1 m1 s12">&emsp;</div>
        <div class="col l4 m4 s12">
            <div class="chip center">
                <span class="center w3-text-white"><strong>Welcome User...</strong></span>
            </div>
            <div class="card transparent">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="img/office.jpg">
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">More information
                        <button class="btn btn-floating pulse right" style="background-color: #F68DC1;"><i class="fa fa-info"></i></button>
                    </span>

                </div>
                <div class="card-reveal teal-text">
                    <span class="card-title grey-text text-darken-4">
                        <strong>Login Information</strong>
                        <i class="mdi mdi-close right red-text"></i>
                    </span>
                    <hr>
                    <p>For you to login, you must be a registered member. If you are not, please contact the administrator via
                        <strong>fwatilah@gmail.com</strong></p>
                    <strong>Login Procedure</strong>
                    <ol>
                        <li>Choose the type of user by clicking on the correct tab. i.e if you are a lecturer,
                            click on the lecturer tab, the admin on the admin tab and student on the student tab.</li>
                        <li>Enter your username</li>
                        <li>Key in your password</li>
                        <li>Click Login</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="col l6 m6 s12">
            <div class="chip">
                <span class="center w3-text-white"><strong>Which Type of User are You?</strong></span>
            </div>
            <div class="card-panel hoverable teal-text">
                <div class="card-content">
                    <div class="row">
                        <div class="col l12 m12 s12" id="opt">
                            <ul class="tabs">
                                <li class="tab col s4 m4 l4">
                                <strong><a href="#stud" name="user_type" id="Student" value="Student" class="w3-text-white">Student</a></strong>
                                </li>
                                <li class="tab col s4 m4 l4">
                                <strong><a href="#lec" name="user_type" id="Lecturer" value="Lecturer" class="w3-text-white">Lecturer</a></strong>
                                </li>
                                <li class="tab col s4 m4 l4">
                                <strong><a href="#adm" name="user_type" id="Admin" value="Admin" class="w3-text-white">Admin</a></strong>
                                </li>
                            </ul>
                        </div>
                        <div id="stud" class="col l12 m12 s12">
                            <form action="#">
                                <div class="row">
                                    <div class="input-field col l12 m12 s12">
                                        <input type="text" name="adm_no" id="adm_no" class="validate">
                                        <label for="adm_no"><i class="fa fa-user"></i>&emsp;Admission Number</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col l12 m12 s12">
                                        <input type="password" name="stud_pass" id="stud_pass" class="validate">
                                        <label for="stud_pass"><i class="fa fa-lock"></i>&emsp;Password</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <a class="waves-effect waves-green w3-text-white btn left chip" role="button" name="stud_submit" id="stud_login" type="submit">Login</a>
                                    <a class="waves-effect waves-light w3-text-white btn right chip" role="button">Forgot Password</a>
                                </div>
                            </form>
                        </div>
                        <div id="lec" class="col l12 m12 s12">
                            <form action="#">
                                <div class="row">
                                    <div class="input-field col l12 m12 s12">
                                        <input type="text" name="lec_number" id="lec_number" class="validate">
                                        <label for="lec_number"><i class="fa fa-user"></i>&emsp;Lecturer Number</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col l12 m12 s12">
                                        <input type="password" name="lec_pass" id="lec_pass" class="validate">
                                        <label for="lec_pass"><i class="fa fa-lock"></i>&emsp;Password</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <a class="waves-effect waves-light w3-text-white btn left chip" role="button" name="lec_submit" id="lec_login" type="submit">Login</a>
                                    <a class="waves-effect waves-light w3-text-white btn right chip">Forgot Password</a>
                                </div>
                            </form>
                        </div>
                        <div id="adm" class="col l12 m12 s12">
                            <form action="#">
                                <div class="row">
                                    <div class="input-field col l12 m12 s12">
                                        <input type="text" name="admin" id="admin" class="validate">
                                        <label for="admin"><i class="fa fa-user"></i>&emsp;Username</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col l12 m12 s12">
                                        <input type="password" name="admin_pass" id="admin_pass" class="validate">
                                        <label for="admin_pass"><i class="fa fa-lock"></i>&emsp;Password</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <a class="waves-effect waves-light  w3-text-white btn left chip" name="admin_submit" role="button" id="admin_login" type="submit">Login</a>
                                    <a class="waves-effect waves-light  w3-text-white btn right chip">Forgot Password</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col l1 m1 s12"></div>
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