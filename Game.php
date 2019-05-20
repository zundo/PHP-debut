<?php

class Character {
/* Définit la classe */
	private $_name;
	private $_heigth;
	private $_gender;
	private $_color;
	private $_weapons;
	private $_skills;
	private $_health;
	private $_strength;
	private $_stamina;
/* Définit les attributs de la classe */
	public function attack(Character $CharacterAttacked){
		$CharacterAttacked->_health -= $this->_strength
	}
	public function defend(Character $CharacterDefended){}
/* Définit les méthodes de la classe 
La fonction attack permet à un personnage d'attaquer et d'enlever un. ombre de point de vie équivalent à la valeur $strength */
	public function getname(){
		return $this->_name;
	}
	public function setname($name){
		echo "Your character name is" . $name;
		return $this->_name = $name;
	}
/* Affiche le string avec la valeur de $name */
	public function getheigth(){
		return $this->_heigth;
	}
	public function setheigth(){
		if($height <= 140){
			echo "You are so small...";
		}
		else{
			echo "Congratulation you are just normal !";
		}
		return $this->_heigth = $heigth;
	}
/* Affiche le string en fonction de la valeur de $heigth */
	public function getgender(){
		return $this->_gender;
	}
	public function setgender(){
		echo "You are a" . $gender;
		return $this->_gender = $gender;
	}
/* Affiche le string avec la valeur de $gender */
	public function getcolor(){
		return $this->_color;
	}
	public function setcolor(){
		echo "You are" . $color;
		return $this->_color = $color;
	}
/* Affiche le string avec la valeur de $n */
	public function getweapons(){
		return $this->_weapons;
	}
	public function setweapons(){
		echo "Your weapon is" . $weapons;
		return $this->_weapons = $weapons;
	}
/* Affiche le string avec la valeur de $weaponqs */
	public function getskills(){
		return $this->_skills;
	}
	public function setskills(){
		echo "You can use" . $skills;
		return $this->_skills = $skills;
	}
/* Affiche le string avec la valeur de $skills */
	public function gethealth(){
		return $this->_health;
	}
	public function sethealth(){
		if($health == 100){
			echo "Your health is full";
		}
		else if($health < 100 && $health >= 50){
			echo "You have " . $health . "of your health";
		}
		else if($health < 50 && $health >=10){
			echo "You still have " . $health . "of your health ! Watch out";
		}
		else
			echo $health . "... The end is near";
		
		return $this->_health = $health;
	}
/* Affiche le string en fonction de la valeur de $health */
	public function getstrength(){
		return $this->_strength;
	}
	public function setstrength(){
		echo "Your strength is " . $strength;
		return $this->_strength = $strength;
	}
/* Affiche le string avec la valeur de $strength */
	public function getstamina(){
		return $this->_stamina;
	}
	public function setstamina(){
		echo "Your stamina is " . $stamina;
		return $this->_stamina = $stamina;
	}
/* Affiche le string avec la valeur de $stamina */
	$Character_1 = new Character();
/* Crée le premier personnage */
	$Character_1->setname("Bill");
	$Character_1->setsexe("Woman");
	$Character_1->setheigth(130);
	$Character_1->setcolor("Red");
	$Character_1->setrweapons("Sword");
	$Character_1->setskills("Attack");
	$Character_1->sethealth(100);
	$Character_1->setstrength(6);
	$Character_1->setstamina(10);
/* Assigne les attributs du premier personnages */	
	$Character_2 = new Character("Morgan", "Man", 170, "Green" , "Fire Ball" , "Magic" , 80 , 8 , 8 );
/* Crée le second personnage et lui assigne ses attributs */

}

