<?php
include_once "Models/Vehicle.php";
	class Car extends Vehicle
	{
		
		function __construct()
		{
			$this->canFly = false;
			$this->speed = 100;
			$this->maxPassengers = 5;
		}

		function travelDistance($minutes)
		{
			return parent::speed() * $minutes;  

		}
	}

?>