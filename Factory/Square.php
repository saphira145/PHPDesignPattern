<?php

class Square implements Shape {

	protected $edge;

	public function __construct($edge) {
		$this->edge = $edge;
	}

	public function draw() {
		echo 'draw Square';
	}
}