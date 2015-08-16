<?php

class MilkDecorator extends Decorator {

	protected $price;

	public function __construct(Bevarage $bevarage) {
		$this->bevarage = $bevarage;
		$this->setPrice();
	}

	public function cost() {
		return $this->bevarage->cost() + $this->getPrice();
	}

	public function description() {
		return $this->bevarage->description() + 'with Milk';
	}
	public function setPrice() {
		switch($this->bevarage->getSize()->getDescription()) {
			case 'Large' :
				$this->price = 1;
				break; 

			case 'Medium':
				$this->price = 0.7;
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