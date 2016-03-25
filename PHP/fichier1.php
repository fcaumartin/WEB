<?php 

// if (file_exists("essai.txt")) /* Vérification si fichier existant */
//  $fp = fopen("essai.txt","r"); /* Ouverture en lecture seule */
// else {
//  echo "Fichier introuvable !";
//  exit();
// }
// /* Boucle jusqu'a la fin du fichier */
// while (!feof($fp))
// {
//  $enr = fgets ($fp,4096); /* Lecture de la ligne */
//  echo "$enr<br />";
// } 


$lignes = file("essai.txt");

foreach ($lignes as $l) {
	echo $l . "<br>";
}

 ?>


