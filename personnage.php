<?php
class character {

// Définir les classes

	protected $_name;
	protected $_height;
	protected $_gender;
	protected $_color;
	protected $_weapon;
	protected $_skill;
	protected $_health;
	protected $_strength;
	protected $_stamina;

// initialiser les attribus
public function __construct($name,$gender,$height,$color,$weapon,$skill,$health,$strength,$stamina){

	$this->setName($name);
	$this->setGender($gender);
	$this->setHeight($height);
	$this->setColor($color);
	$this->setWeapon($weapon);
	$this->setSkill($skill);
	$this->setHealth($health);
	$this->setStrength($strength);
	$this->setStamina($stamina);
}
// Définir les méthodes
// Définir les méthodes de la classe 
/*
public function attack(character $characterAttacked){
	$characterAttacked->setHealth($characterAttacked->getHealth() - $this->_strength) ;
	echo '<p style="color:red;font-size:40px;" class="attack">';
	echo $this->getName() . " vient ". $this->getSkill()." sur " . $characterAttacked->getName();
	echo $characterAttacked->getHealth();
	echo '</p>';
}
*/
abstract function attack(character $characterAttacked);
abstract static function crier();
public function defend(character $characterDefended){}

// Afficher les attribus
public function getName(){
	return $this->_name;

}
public function setName($name){
	echo "Your character name is ". $name . "<br>";
	return $this->_name  = $name ; 

}

public function getHeight(){
	return $this->_height;

}
public function setHeight($height){
	if ($height <= 140) {
		echo "You are to small... "."<br>";
		
	}
	else
	 {
		echo "Congratulation you are normal ! "."<br>";
	}
	//echo "Your character height is ". $height . "<br><br>";
	return $this->_height = $height;

}

public function getGender(){
	return $this->_gender;

}
public function setGender($gender){
	echo "Your character gender is ". $gender . "<br>";
	return $this->_gender = $gender;

}


public function getColor(){
	return $this->_color;

}
public function setColor($color){
	echo "Your character color is ". $color . "<br>";
	return $this->_color = $color;

}


public function getWeapon(){
	return $this->_weapon;
}
public function setWeapon($weapon){
	echo "Your character weapon is ". $weapon . "<br>";
	return $this->_weapon = $weapon;
}

public function getSkill(){
	return $this->_skill;
}
public function setSkill($skill){
	echo "Your character skill are ". $skill . "<br>";
	return $this->_skill = $skill;
}


public function getHealth(){
	return $this->_health;
}
public function setHealth($health){
	if ($health == 100) {
		echo "You are in good shape" . "<br>";
	}
	else if ($health < 100 && $health >=50) {
		echo" You have ".$health." of your health "."<br>";
	}
	else if ($health < 50 && $health >= 10) {
		echo "Watch out..."."<br>";
	}
	else echo "... The end is near "."<br>";

	//echo "Your character health is ". $health . "<br><br>";
	return $this->_health = $health;
}

public function getStrength(){
	return $this->_strength;
}
public function setStrength($strength){
	echo "Your character strength is ". $strength . "<br>";
	return $this->_strength = $strength;
}


public function getStamina(){
	return $this->_stamina;
}
public function setStamina($stamina){
	echo "Your character stamina is ". $stamina . "<br>";
	return $this->_stamina = $stamina;
}


}
?>

