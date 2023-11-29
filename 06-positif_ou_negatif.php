<?php
function chekNumber($number,){
    if($number>0){return "positif";}
    elseif($number<0)
    {return"negatif";}
    else{return"Nul";}
}
    $result=chekNumber(5);
    echo" le nombre est:".$result; 


?>