<?php
function ValeurMaximale($tableau) {
    $valeurMaximale = max($tableau);
    return $valeurMaximale;
  }
  
  $nombres = [10, 5, 8, 3, 12];
  $resultat = ValeurMaximale($nombres);
  echo $resultat;
  

?>