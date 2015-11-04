<?php
include_once "Models/Vehicle.php";
	class Bike extends Vehicle
	{
		
		function __construct($speed, $maxPassengers)
		{
			parent::__construct(false, $speed, $maxPassengers);
		}
	}


?>