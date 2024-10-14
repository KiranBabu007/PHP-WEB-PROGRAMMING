<?= '<p>Hello World new</p>' ?>
<?= ceil(0.70)."<br>"  ?>
<?= round(0.7098)."<br>" ?>

<?php 
echo(rand()."<br>");
echo(rand(10,100)."<br>");

define("MINSIZE",50);
echo MINSIZE."<br>";

$today = date("F j, Y, g:i a"); 

echo("Today is:$today"."<br>");

$cars=array("Saab","Volume","Toyota","BMW");

for($i= 0;$i<count($cars);$i++){
    echo($cars[$i]."<br>");
}



?>
