<?php

class Circle implements Shape {

	protected $radius;

	public function __construct($radius) {
		$this->radius = $radius;
	}

	public function draw() {
		echo 'draw circle';
	}
}