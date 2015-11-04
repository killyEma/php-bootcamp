<?php
include_once "Models/Vehicle.php";
	class Car extends Vehicle
	{
		
		function __construct($speed, $maxPassengers)
		{
			parent::__construct(false,$speed,$maxPassengers);
		}
	}

?>