<?php
class magicien extends character
{
	protected $magicdamage;
	protected $mana;

	public function __construct($name,$gender,$height,$color,$weapon,$skill,$health,$strength,$stamina,$magicdamage,$mana) 
		{
			parent::__construct($name,$gender,$height,$color,$weapon,$skill,$health,$strength,$stamina,$magicdamage,$mana);
			$this->setMagicdamage($magicdamage);
			$this->setMana($mana);

		}

public function fireball (character $cible){
			$cible->_health -= $this->magicdamage;
			echo "<b>".$cible->_name."</b>, ta santé est de ".$cible->_health."<br>";

			//$cible->setHealth($ccible->getHealth() - $this->magicdamage);
		}

	public function getMagicdamage(){
		return $this->magicdamage;
	}
	public function setMagicdamage($magicdamage){
		echo "Your magic damage is at " . $magicdamage . "<br>";
		return $this->magicdamage = $magicdamage;
	}

	public function getMana(){
		return $this->mana;
	}
	public function setMana($mana){
		echo "Your mana is at " .$mana . "<br>" ;
		return $this->mana = $mana;
	}
	public static function crier(){
		echo"bepbep bep bepbep bep bepbep bep bepbep bep bepbep bep";
	}
}
	
?>