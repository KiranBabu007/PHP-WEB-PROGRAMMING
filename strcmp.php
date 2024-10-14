<?php
$str1="banana";
$str2="apple";
$result=strcmp($str1,$str2);
if($result<0){
    echo($str1." is before ".$str2);
}
elseif ($result==0){
    echo($str1." is same as ".$str2);
}
else{
    echo($str1." is after ".$str2);
}

?>