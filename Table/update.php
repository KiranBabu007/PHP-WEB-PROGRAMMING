<html>
<?php
$connect=mysqli_connect("localhost","root","","kiran");

if($connect){
    
    $sql="Select * from test";
    $res=mysqli_query($connect,$sql);

    if(mysqli_num_rows($res)>0){
        echo 'Select the ID to Update <br>';
        echo '<form method="POST" action="">'; 
        echo '<select name="selectedId">';
        while($row=mysqli_fetch_assoc($res)){

            $id=$row['id'];
            echo '<option values="'.$id.'">'.$id. ' </option>';
        }
       
        echo '</select>';
        echo '<br><br>';
        echo '<label for="">Enter the Text to update</label><br><br>';
        echo '<input type="text" name="testfield" size="30"><br><br>';
        echo '<input type="submit" name="submit" value="Update Record">';
        echo '</form>'; 
    }

}

if (isset($_POST["submit"])) {
    $selectedId = $_POST['selectedId'];
    $newText = $_POST['testfield'];

    
    $updateSql = "UPDATE test SET name='$newText' WHERE id='$selectedId'"; 

    if (mysqli_query($connect, $updateSql)) {
        echo "Record updated successfully.";
    } else {
        echo "Error updating record: " . mysqli_error($connect);
    }
}

mysqli_close($connect); 
?>



<br><a href="/dashboard/Kiran/Table">Back</a></html>