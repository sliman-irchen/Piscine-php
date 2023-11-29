<?php
function inverseTableau($tableau) 
{
  $tableauInverse = array_reverse($tableau);
  return $tableauInverse;
}

$tableauExemple = [1, 2, 3, 4, 5];
$resultat = inverseTableau($tableauExemple);
print_r($resultat);
?>