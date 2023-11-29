<?php
function displayMessage(){
$message="Hello";
for($i=0;$i<10;$i++)
if($i==4){
    echo"___".$message."___ \n";
}
else
{echo $message."\n";}
}
displayMessage();
?>