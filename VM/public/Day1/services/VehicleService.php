<?php
include "Models/Bike.php";
include "Models/Car.php";
include "Models/Plane.php";
	class VehicleService 
	{

		private function __contruct(){ }

		public static function getVehicles(){
			return array( new Plane(900,650), new Car(100,5), new Bike(25,2) );
		}
		
	}
?>