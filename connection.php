<?php
$servername="localhost";
$username="root";
$password="";
$dbname="sams_database";
// to create connection
$conn=mysqli_connect($servername,$username,$password,$dbname);
if($conn){
    echo" ";
}
else{
    die("Connection Failed".mysqli_connect_error());
}

?>
