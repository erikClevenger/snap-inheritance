<?php

class Vehicle {
	protected $licensePlate;

	public function __construct(string $newLicensePlate){
			$this->setLicensePlate($newLicensePlate);
		}

	public function getLicensePlate(): string {
		return ($this->licensePlate);
	}

	public function setLicensePlacte(string $newLicensePlate): void {
		$newLicensePlate = trim($newLicensePlate);
		$newLicensePlate = filter_var($newLicensePlate, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
		$this->licensePlate = $newLicensePlate;
	}
}

