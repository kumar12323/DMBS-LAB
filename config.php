<?php

$host = "localhost";
$dbusername = "root"; # user name. WHen you are opening mysql on cmd you username comes and then password no? That is the user name here
$dbpassword = "";# enter the password you use to enter mysql in cmd
$dbname = "tyc"; # enter the name of the db you created
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
    die('Connect Error ('. mysqli_connect_errno() .') '. mysqli_connect_error());
}

?>


#in the html file write require 'config.php'; where config.php 
is this code in a file.