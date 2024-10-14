<?php

$cars=array("Saab","Volume","Toyota","BMW");

for($i= 0;$i<count($cars);$i++){
    echo($cars[$i]."<br>");
}

$mon = array("January"=>"first",
"February"=>"second","March"=>"third","April"=>"fourth"
,"May"=>"fifth");

foreach($mon as $k=>$v){
 print("<p>$k is the $v month</p>");
}

$fruits= array("Orange","Grapes","Banana","Apple");

rsort($fruits);

foreach($fruits as $x){
    echo($x."<br>");
}

$nums =array("one"=>"2","two"=>"1","three"=>"3");

sort($nums);

foreach($nums as $num=>$n){
    echo($num."<br>".$n."<br>");
}

$arr1=array('a','1','2','3');
$arr2=array('a','3');
$inter=array_intersect($arr2,$arr1);


if($inter===$arr2){
    echo "<br/>It is a subset<br/>";
} else {
    echo "Not a subset";
}










?>