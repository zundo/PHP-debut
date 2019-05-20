<?php

//Création des classes
class evil extends character{

	protected $sort;

	public function __construct($name,$gender,$height,$color,$weapon,$skill,$health,$strength,$stamina,$sort){
		parent::__construct($name,$gender,$height,$color,$weapon,$skill,$health,$strength,$stamina,$sort);

		$this->setSort($sort);

	}
	public function getSort(){
	return $this->sort;
}
public function setSort($sort){
	echo "Tu as reçu un ". $sort."<br>";
	return $this->sort = $sort;

}
}


class magicien extends character
{
	protected $bouclier;

	public function __construct($name,$gender,$height,$color,$weapon,$skill,$health,$strength,$stamina,$bouclier) 
		{
			parent::__construct($name,$gender,$height,$color,$weapon,$skill,$health,$strength,$stamina,$bouclier);

			$this->setBouclier($bouclier);

		}


public function getBouclier(){
	return $this->bouclier;
}
public function setBouclier($bouclier){
	echo "Defend toi avec ton  ". $bouclier . "<br>";
	return $this->bouclier  = $bouclier ; 
}
}

?>

