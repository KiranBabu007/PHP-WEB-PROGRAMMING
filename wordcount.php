<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Word Count</h1>
    <form action="" method="post">
        <label for="message">Enter a string</label>
        <input type="text" id="message" name="message" required>
        <button type="submit" name="submit" >Check</button>
    </form>

    <?php
    if(isset($_POST["submit"])){
        $str= $_POST['message'];
        echo("Length of the word is ".str_word_count($str));
        
    }

    ?>
</body>
</html>

