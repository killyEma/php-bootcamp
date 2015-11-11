<?php
include_once "Models/Vehicle.php";
	
	class Plane extends Vehicle
	{
		
		function __construct()
		{
			$this->canFly = true;
			$this->speed = 900;
			$this->maxPassengers = 650;
		}
		function travelDistance($minutes)
		{
			return parent::speed() * $minutes;  

		}


	}


?>