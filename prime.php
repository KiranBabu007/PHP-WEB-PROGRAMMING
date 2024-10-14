<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Prime Number Checker</h1>
    <form action="" method="post">
        <label for="number">Enter a number</label>
        <input type="number" id="number" name="number" required>
        <button type="submit" name="submit" >Check</button>
    </form>

    <?php
    if(isset($_POST["submit"])){
        $number= (int)$_POST['number'];
        if(isPrime($number)){
            print($number.' Is Prime');
        }
        else{
            print($number." is not Prime" );
        }
    }

    function isPrime($n){
        if($n < 2){
            return True;
        }
        else{
            $ans=True;
            for($i=2;$i<$n;$i++){
                if($n % $i == 0){
                    $ans=False;
                }
            }
            return $ans;
        }
    }
    
    ?>
</body>
</html>