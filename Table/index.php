<?php
$servername="localhost";
$username="root";
$password="";
$dbname="kiran";


$connect=mysqli_connect($servername,$username,$password,$dbname);

if($connect){
    echo "Connected to ". $dbname . " established successfully";
    
}
else{
    die("Connection Failed: ". mysqli_connect_error());
}


?>