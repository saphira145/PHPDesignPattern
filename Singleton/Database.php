<?php

class Database {

	private static $database;

	private function __construct() {}

	public static function getInstance() {
		if (!self::$database) {
			self::$database = new Database;
		}
		return self::$database;
	}
}

$database = Database::getInstance();
$database1 = Database::getInstance();
var_dump($database);
var_dump($database1);