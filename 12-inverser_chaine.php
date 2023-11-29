<?php

function inverserChaine($word) {
  $chaineInverse = strrev($word);
  return $chaineInverse;
}

$chaineWord = "HelloWorld";
$resultat = inverserChaine($chaineWord);
echo $resultat ."\n";
?>