<?php
$servername="localhost";
$username="root";
$password="";
$dbname="kiran";


$connect=mysqli_connect($servername,$username,$password,$dbname);

if($connect){
    echo "Connected to ". $dbname . " established successfully";
    $sql = "CREATE TABLE new_table (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(30) NOT NULL
    )";
    $res=mysqli_query($connect,$sql);
    if($res){
        echo '<br/> Table Created Successfully!';
    }
    else{
        die("Error: ".mysqli_error($connect));
    }
}
else{
    die("Connection Failed: ". mysqli_connect_error());
}




?>