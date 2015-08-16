<?php


class Customer implements Observer {

	protected $name;

	public function __construct($name) {
		$this->name = $name;
	}
	public function notify($price) {
		echo "notify to user name {$this->name} that product price is changed: {$price}" . "</br>";
	}
}