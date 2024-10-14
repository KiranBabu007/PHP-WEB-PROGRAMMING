
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Pattern Found</h1>
    <form action="" method="post">
        <label for="message">Enter a string</label>
        <input type="text" id="message" name="message" required><br><br>
        <label for="pattern">Enter Pattern</label>
        <input type="text" id="pattern" name="pattern" required><br><br>
        <button type="submit" name="submit" >Search Pattern in my string</button><br>
    </form>

    <?php
    if(isset($_POST["submit"])){
        $str= $_POST['message'];
        $pattern= $_POST['pattern'];

        if(preg_match_all("/".$pattern."/",$str,$MATCH)){
            echo $pattern. " Found ".count($MATCH[0])." times in ".$str;
        }
        else{
            echo "Not Found";
        }
        
    }

    ?>
</body>
</html>

