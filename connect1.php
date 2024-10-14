<?php
$servername="localhost";
$username="root";
$password="";
$dbname="test";


// $connect=mysqli_connect($servername,$username,$password,$dbname);

// if($connect){
//     echo "Connected to ". $dbname . " established successfully";
// }
// else{
//     die("Connection Failed: ". mysqli_connect_error());
// }


$connect=new mysqli($servername,$username,$password,$dbname);
if($connect->connect_error){
    die("Connection Failed: ". $connect->connect_error);
}
else{
    echo "Connected to ". $dbname . "using Object Oriented established successfully";
}


?>