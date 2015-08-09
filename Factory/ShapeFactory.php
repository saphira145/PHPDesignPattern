<?php

class ShapeFactory {

	public function create($className, $var) {
		if (class_exists($className)) {
			switch ($className) {
				case 'circle':
					return new Circle($var);
					break;
				
				case 'square':
					return new Square($var);
					break;
			}
		}
	}
} 