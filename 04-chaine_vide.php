<?php
function displayString($string){
if(empty($string))
 {
return"vide";}
else{return"non vide";}
}
$result= displayString("Hello");
echo" la chaine est:".$result;

?>