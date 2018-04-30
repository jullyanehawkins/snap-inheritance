<?php
require_once 'Vehicle.php';
class NissanAltima extends Vehicle {
	private $belongsToMarlon;

	public function __construct($licensePlate, $belongsToMarlon) {
		parent::__construct($licensePlate);
		$this->belongsToMarlon = $belongsToMarlon;
	}

	public function getBelongsToMarlon() {
		return $this->belongsToMarlon;
	}

	public function setBelongsToMarlon($belongsToMarlon) {
		$this->belongsToMarlon = $belongsToMarlon;
	}
}