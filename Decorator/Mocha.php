<?php

class Mocha extends Bevarage {

	protected $size;
	protected $price;


	public function cost() {
		return $this->getPrice();
	}

	public function description() {
		return 'Mocha';
	}

	public function setSize(Size $size) {
		$this->size = $size;
		$this->setPrice();
	}

	public function getSize() {
		return $this->size;
	}

	public function setPrice() {
		switch($this->getSize()->getDescription()) {
			case 'Large' :
				$this->price = 1.5;
				break; 

			case 'Medium':
				$this->price = 1;
				break;

			case 'Small' :
			case 'default':
				$this->price = 0.5;
				
		}
	}

	public function getPrice() {
		return $this->price;
	}
}