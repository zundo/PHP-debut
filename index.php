<?php

require "personnage.php";
require "evil.php";
require "magicien.php";

?>

<!DOCTYPE html>
<html>
<head>
	<title> POO RPG GAME </title>
	<link rel="icon" type="image/jpeg" href="tick.jpeg">
</head>
<body>


<?php


echo '------------- NOUVEAU PERSONNAGE -------------<br><br>';

$character_1 = new character("Nico", "male", 128, "yellow", "sword", "jumper", 68,6,100);

echo '<br>--------------- FIN DE CREATION ---------------<br>';


echo '------------- NOUVEAU PERSONNAGE -------------<br><br>';

$character_2 = new character("Anthony", "male", 157, "red", "hamer", "shoot", 85, 7, 80);

echo '<br>--------------- FIN DE CREATION ---------------<br>';


echo '------------- NOUVEAU PERSONNAGE -------------<br><br>';

$evil = new evil("THE Evil", "woman", 155, "red","fireball","invisible",85,8,95,"efdr");

echo '<br>--------------- FIN DE CREATION ---------------<br>';

echo '------------- NOUVEAU PERSONNAGE -------------<br><br>';

$magicien =new magicien("Magician", "man",170,"purple", "wind", "fast",90, 6, 92,10,8);

echo '<br>--------------- FIN DE CREATION ---------------<br>';

$count = 1;
$turn = rand(0,1);
$health1 = 1;
$health2 = 1;

while($health1 >0 && $health2>0 ){

	if ($turn == 0) {
		echo "<br>----- TON TOUR".$count. "--------<br>";
		$magicien-> fireball($evil);
		$health1 = $evil -> getHealth();

		$turn++;
		$count++;
	}
	if ($turn == 1) {
		echo "<br>----- TON TOUR".$count. "--------<br>";
		$magicien-> fireball($character_2);
		$health2= $character_2 -> getHealth();

		$turn--;
		$count++;
	}
}
?>



</body>
</html>