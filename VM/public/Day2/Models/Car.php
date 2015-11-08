<?php
include_once "Models/Vehicle.php";
	class Car extends Vehicle
	{
		
		function __construct()
		{
			parent::__construct(false, 100, 5);
		}
	}

?>