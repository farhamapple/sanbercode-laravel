<?php

class Animal{

	public $name;
	public $legs;
	public $cold_blooded;

	public function __construct($name = '', $legs = 2, $cold_blooded = 'false'){
		$this->name = $name;
		$this->legs = $legs;
		$this->cold_blooded = $cold_blooded;
	}

	public function getName(){

		return $this->name;
	}

}

?>