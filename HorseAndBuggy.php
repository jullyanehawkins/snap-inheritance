<?php
require_once 'Vehicle.php';
class HorseAndBuggy extends Vehicle {
	private $numHorses;

	public function __construct($licensePlate, $numHorses) {
		parent::__construct($licensePlate);
		$this->numHorses = $numHorses;
	}

	public function getNumHorses() {
		return $this->numHorses;
	}

	public function setNumHorses($numHorses) {
		$this->numHorses = $numHorses;
	}
}