<?php

include 'db/connect.php';

if (isset($_POST['name'], $_POST['adm_no'], $_POST['stud_pass'])){  //STUDENT

    $name       = $_POST['name'];
    $adm_no     = $_POST['adm_no'];
    $stud_pass  = $_POST['stud_pass'];

    if ($name != ''){   //Check the selected user
        if ($adm_no != ''){ //Check Admission Number
            if ($stud_pass != ''){  //Check Password

                //SELECT THE USER FROM THE DATABASE
                $user = mysqli_query($conn, "SELECT * FROM `student` WHERE `adm`='$adm_no'");

                if ($user == true){
                    $row = mysqli_fetch_array($user, MYSQLI_BOTH);
                    if ($adm_no === $row['adm']){
                        if ($stud_pass === strtolower($row['adm'])){
                            echo "Student";
                            session_start();
                            $_SESSION['student']   = $row['adm'];
                        }else{
                            echo "Your password should be your admission number in lowercase";
                        }
                    }else{
                        echo mysqli_error($conn);
                    }
                }else{
                    echo "You never did any exam";
                }

            }else{
                echo 'Please enter your password';
            }
        }else{
            echo 'Please enter your admission number';
        }
    }else{
        echo 'Please enter the type of user';
    }

}elseif (isset($_POST['name'], $_POST['lec_number'], $_POST['lec_pass'])){  //LECTURER

    $name       = $_POST['name'];
    $lec_number = $_POST['lec_number'];
    $lec_pass   = $_POST['lec_pass'];

    if ($name != ''){   //Check the selected user
        if ($lec_number != ''){ //Check Lecturer number
            if ($lec_pass != ''){   //Check Lecturer password

                //SELECT THE USER FROM THE DATABASE
                $user = mysqli_query($conn, "SELECT `*` FROM `users` WHERE `user_type`='$name'");

                if ($user == true){ //Check if the query is executed successfully
                    $row = mysqli_fetch_assoc($user);

                    if ($row > 0){  //Check if the database found user
                        if ($lec_number === $row['username']){
                            if ($lec_pass === $row['password']){

                                echo "Lecturer";
                                session_start();
                                $_SESSION['lecturer']   = $row['username'];

                            }else{
                                echo "Wrong Password";
                            }
                        }else{
                            echo "No Lecturer with such Number";
                        }
                    }else{
                        echo "User was not found";
                    }
                }else{
                    echo "Error! Please contact the IT Support";
                }

            }else{
                echo "Please enter PASSWORD!";
            }
        }else{
            echo "Please enter LECTURER NUMBER";
        }
    }else{
        echo "Please Select the USER!";
    }

}elseif (isset($_POST['name'], $_POST['admin'], $_POST['admin_pass'])){ //ADMIN

    $name       = $_POST['name'];
    $admin      = $_POST['admin'];
    $admin_pass = $_POST['admin_pass'];

    if ($name != ''){   //Check the selected user
        if ($admin != ''){  //Check Admin Username
            if ($admin_pass != ''){ //Check Admin Password

                //SELECT THE USER FROM THE DATABASE
                $user = mysqli_query($conn, "SELECT `*` FROM `users` WHERE `user_type`='$name'");

                if ($user == true){ //Check if the query is executed successfully
                    $row = mysqli_fetch_assoc($user);

                    if ($row > 0){  //Check if the database found user
                        if ($admin === $row['username']){
                            if ($admin_pass === $row['password']){

                                echo "Admin";
                                session_start();
                                $_SESSION['admin']      = $row['username'];

                            }else{
                                echo "Wrong Password.";
                            }
                        }else{
                            echo "No Admin with such Username.";
                        }
                    }else{
                        echo "User was not found.";
                    }

                }else{
                    echo "Error! Please contact the IT Support.";
                }

            }else{
                echo "Please enter PASSWORD!";
            }
        }else{
            echo "Please enter ADMIN username";
        }
    }else{
        echo "Please Select the USER!";
    }

}else{
    echo "Please enter your username and password";
}