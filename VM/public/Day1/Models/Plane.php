<?php
include_once "Models/Vehicle.php";
	class Plane extends Vehicle
	{
		
		function __construct($speed, $maxPassengers)
		{
			parent::__construct(true, $speed, $maxPassengers);
		}
	}


?>