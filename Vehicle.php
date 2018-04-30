<?php
/**
 * Created by PhpStorm.
 * User: jully
 * Date: 4/30/18
 * Time: 8:32 AM
 */

class Vehicle {
	/**
	 * @var
	 */
	protected $licensePlate;

	public function __construct ($licensePlate) {
		$this->licensePlate = $licensePlate;
	}

	public function getLicensePlate() {
		return $this->licensePlate;
	}

	public function setLicensePlate($licensePlate) {
		$this->licensePlate = $licensePlate;
	}
}