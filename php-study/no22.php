<?php

//static

class User{
	public $name;
	public function __construct($name){
		$this->name = $name;
	}
	public function sayHi(){
		echo "hi, i am $this->name!";
	}
	public static function getMessage(){
		echo "hello from User class!";
	}
}

User::getMessage();

//$tom = new User("Tom");