<?php

class User{
	public $name;
	public function __construct($named){
		$this->name = $name;
	}
	public function sayHi(){
		echo "hi, i am $this->name!";
	}
}
