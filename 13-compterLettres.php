<?php

function compterOccurrences($lettre, $chaine) {
  $lettre = strtolower($lettre);
  $chaine = strtolower($chaine);
  $occurrences = substr_count($chaine, $lettre);
  return $occurrences;
}

$lettreExemple = 'L';
$chaineExemple = 'HelloSliman';
$resultat = compterOccurrences($lettreExemple, $chaineExemple);
echo $resultat;

?>