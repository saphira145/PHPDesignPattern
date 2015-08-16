<?php 
class Chocolate extends Decorator {

	protected $price;

	public function __construct(Bevarage $bevarage) {
		$this->bevarage = $bevarage;
		$this->setPrice();
	}

	public function cost() {
		return $this->bevarage->cost() + $this->getPrice();
	}

	public function description() {
		return $this->bevarage->description() + 'with chocolate';
	}

	public function setPrice() {
		switch($this->bevarage->getSize()->getDescription()) {
			case 'Large' :
				$this->price = 0.5;
				break; 

			case 'Medium':
				$this->price = 0.2;
				break;

			case 'Small' :
			case 'default':
				$this->price = 0.1;
				
		}
	}

	public function getPrice() {
		return $this->price;
	}
}