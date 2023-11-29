<?php
function checkLength ($str)
{
if(strlen($str)>10){
    return"longue";
}
else{return"courte";}
}
$result=checkLength("Hello_Sliman");
echo"la chaîne est:" .$result;

?>