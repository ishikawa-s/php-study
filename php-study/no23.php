<?php


abstract class BaseUser{
	public $name;
	abstract public function sayHi();
}

class user extends BaseUser{
	public function sayHi(){
		echo "hello from user";
	}
}