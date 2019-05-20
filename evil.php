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

?>

