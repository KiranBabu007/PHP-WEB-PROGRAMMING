<?php
$ages=array("Harry"=>21,"Alice"=>20,"Megha"=>22,"Bob"=>19);

$ages["Megha"]=28;

asort($ages);

print($ages["Alice"]);
?>