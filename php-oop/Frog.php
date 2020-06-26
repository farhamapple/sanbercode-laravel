<?php

require_once('Animal.php');

class Frog extends Animal{

	public function jump(){

		echo 'Hop Hop';
	}

	public function getLegs(){
		return $this->legs=4;
	}

	public function getBlooded(){

		return $this->cold_blooded = 'true';
	}
}
?>