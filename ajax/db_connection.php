<?php

// Connection variables 
$host = "localhost"; // MySQL host name eg. localhost
$user = "root"; // MySQL user. eg. root ( if your on localserver)
$password = "588628"; // MySQL user password  (if password is not set for your root user then keep it empty )
$database = "test"; // MySQL Database name

// Connect to MySQL Database 
$con=mysqli_connect($host, $user, $password, $database);
if(!$con){
    echo"fail";
}else{
    echo"success";
}
// Select MySQL Database 
//mysqli_select_db($db, $database);

?>