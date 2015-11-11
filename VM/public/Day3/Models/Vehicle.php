<?php
include_once "Interface/VehicleActions.php";
	abstract class Vehicle implements VehicleActions
	{
		protected $canFly = false;
		protected $speed = null;
		protected $maxPassengers = null;

		
		abstract function travelDistance($minutes);


		public function canfly()
		{
			return $this->canFly;
		}
		public function speed()
		{
			return $this->speed;
		}
		public function maxPassengers()
		{
			return $this->maxPassengers;
		}

		public function getName()
		{
			return get_class($this);
		}

	}

?>