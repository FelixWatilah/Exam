<?php
$SERVER = 'localhost';
$USER   = 'root';
$PASS   = '';
$DB     = 'exam';

$error = "Sorry, we are experiencing some problems.";

$conn = mysqli_connect($SERVER, $USER, $PASS, $DB) or die($error);


?>