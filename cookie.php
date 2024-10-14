<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="POST">
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
    if(isset($_POST["submit"]))
    {
        define("FIVE_DAYS",60*60*24*5);

        setcookie("username",$_POST["username"],time()+FIVE_DAYS);
        $name=$_COOKIE["username"];

        echo "Cookies set successfully with the following data";
        echo "<p>$name</p>";
    }
    ?>
</body>
</html>