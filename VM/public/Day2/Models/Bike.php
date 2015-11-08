<?php
include_once "Models/Vehicle.php";
	class Bike extends Vehicle
	{
		

		function __construct()
		{
			parent::__construct(false, 25, 2);
		}
	}


?>