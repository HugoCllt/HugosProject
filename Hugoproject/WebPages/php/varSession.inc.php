

<?php

// chemin d'accès à votre fichier JSON
$file = '../json/produit.json'; 
// mettre le contenu du fichier dans une variable
$data = file_get_contents($file); 
// décoder le flux JSON
$obj = json_decode($data); 
// accéder à l'élément approprié
echo $obj[0]->Simage;

?>