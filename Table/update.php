<html><?php
$servername="localhost";
$username="root";
$password="";
$dbname="kiran";


$connect=mysqli_connect($servername,$username,$password,$dbname);

if($connect){
    echo "Connected to ". $dbname . " Established successfully<br>";
    $sql="UPDATE test SET name='I love India' WHERE id = 1";

    $res=mysqli_query($connect,$sql);
    if($res){
        echo 'Record Updated Successfully!';
    }
    else{
        die("Error: ".mysqli_error($connect));
    }
}
else{
    die("Connection Failed: ". mysqli_connect_error());
}


?><br><a href="/dashboard/Kiran/Table">Back</a></html>