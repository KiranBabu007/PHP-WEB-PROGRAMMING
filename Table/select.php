<html>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="kiran";


$connect=mysqli_connect($servername,$username,$password,$dbname);

if($connect){
    echo "Connected to ". $dbname . " established successfully";

    $sql="Select * from test";

    $res=mysqli_query($connect,$sql);

    if(mysqli_num_rows($res)>0){
        echo "<table border='border' width='300'>
        <tr>
        <th>id</th>
        <th width='250'>Name </th>
        </tr>";
        while($row=mysqli_fetch_assoc($res)){
            echo "<tr><td>".$row["id"]. "</td><td>". $row["name"]."</tr>";
        }
        echo "</table>";

    }
    else{
        echo " 0 results";
    }
    
}
else{
    die("Connection Failed: ". mysqli_connect_error());
}


?><br><a href="/dashboard/Kiran/Table">Back</a></html>