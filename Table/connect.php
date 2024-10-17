<html><?php
$servername="localhost";
$username="root";
$password="";
$dbname="kiran";


$connect=mysqli_connect($servername,$username,$password,$dbname);

if($connect){
    echo "Connected to ". $dbname . " established successfully";
    $sql="INSERT INTO test(name) VALUES ('$_POST[textfield]')";
    $res=mysqli_query($connect,$sql);
    if($res){
        echo '<br/> Data Inserted Successfully!';
    }
    else{
        die("Error: ".mysqli_error($connect));
    }
}
else{
    die("Connection Failed: ". mysqli_connect_error());
}




?><br><a href="/dashboard/Kiran/Table">Back</a></html>