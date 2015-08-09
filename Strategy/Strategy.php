<?php

Abstract class Animal {

	protected $flyType;

	public function tryFly() {
		$this->flyType->fly();
	}
	public Abstract function makeNoise();
}


interface FlyType {

	public function fly();
}

class CanFly implements FlyType {
	public function fly() {
		echo 'I can fly';
	}
}

class Cannotfly implements FlyType {

	public function fly() {
		echo "I can't fly";
	}
}
class Dog extends Animal {

	public function __construct() {
		$this->flyType = new Cannotfly();
	}

	public function makeNoise() {
		echo 'wolf wolf';
	}

	public function chasesCat() {
		echo 'chase';
	}
}

class Bird extends Animal {

	public function __construct() {
		$this->flyType = new CanFly();
	}

	public function makeNoise() {
		echo "chip chip";
	}
}

// class ObjectFactory {

// 	public function create($class) {
// 		return new $class();
// 	}
// }



function test(Animal $animal) {
	$animal->tryFly();
}
// $ojectManager = new ObjectFactory;
test(new Dog());