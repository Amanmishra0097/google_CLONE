<?php
$servername="localhost";
$username="root";
$password="";
$dbname="sams_database";
// to create connection
$con= new mysqli($servername,$username,$password,$dbname);
if($con->connect_error){
    echo"connection failed";
}
else{
    echo"connection succes";
}

?>
