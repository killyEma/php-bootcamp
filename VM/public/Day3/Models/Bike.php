<?php
include_once "Models/Vehicle.php";
	class Bike extends Vehicle
	{
		
		function __construct()
		{
			$this->canFly = false;
			$this->speed = 25;
			$this->maxPassengers = 2;
		}

		function travelDistance($minutes)
		{
			return parent::speed() * $minutes;  

		}
	}


?>