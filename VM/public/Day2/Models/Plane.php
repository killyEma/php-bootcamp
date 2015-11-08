<?php
include_once "Models/Vehicle.php";
	class Plane extends Vehicle
	{
		
		function __construct()
		{
			parent::__construct(true, 900, 650);
		}
	}


?>