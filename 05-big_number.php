<?php
function getMax($number1,$number2){
    if($number1>$number2){return $number1;}
    else
    {return $number2;}
}
$result=getMax(10,20);
echo"Le plus grand nombre est:".$result;
?>