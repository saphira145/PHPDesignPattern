<?php

interface Subject {

	public function attachObserver(Observer $observer);

	public function detachObserver(Observer $observer);

	public function notify();
}