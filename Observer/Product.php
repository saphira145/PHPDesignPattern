<?php


class Product implements Subject {


	protected $name;

	protected $price;

	protected $obs = [];

	public function __construct($name, $price) {

		$this->name = $name;
		$this->price = $price;
	}

	public function attachObserver(Observer $observer) {
		$this->obs[] = $observer;
	}

	public function setPrice($price) {
		$this->price = $price;
		$this->notify();
	}

	public function detachObserver(Observer $observer) {
		$this->obs = array_filter($this->obs, function($element) use ($observer){
			if ($element === $observer)
				return;
			return $element;
		});
	}

	public function notify() {
		foreach ($this->obs as $ob) {
			$ob->notify($this->price);
		}
	}
}