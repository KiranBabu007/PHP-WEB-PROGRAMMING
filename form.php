<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Hello Message</title>
</head>
<body> 
    
<form action="" method="GET">
        <label for=""> Name</label>
        <input name="username" id="username" type="text"> <br>
        <br>
        <label for="">Password:</label>
        <input type="password" id="password" name="password">
        <br><br>
        <input type="submit"  name="submit" value="Submit">
        <input type="submit" name="cancel" value="cancel">
    </form>
    <?php
    
    if(isset($_GET['cancel'])){
         header("Location: index.php");
    }

    $failure=False;
    $user=$_GET['username'];
    $pass=$_GET['password'];

    if(isset($_GET['submit']) ){
        if(strlen($user)< 1 || strlen($pass)<1 ){
            $failure="User name and password are required";
        }
        else{
            if($_GET['password']=="admin123"){
                header("Location:welcome.php?name=".urlencode($_GET['username']));
                return;
            }
            else{
                $failure="Incorrect password";
            }
        }
    }
    ?>
    <?php
     if($failure){
        echo('<p style="color:red;">'.htmlentities($failure)."</p>\n");
    }
    ?>


   
</body>
</html>