<?php

	class Vehicle 
	{
		private $canFly = false;
		private $speed = null;
		private $maxPassengers = null;


		function __construct($canFly, $speed, $maxPassengers)
		{
			$this->canFly = $canFly;
			$this->speed = $speed;
			$this->maxPassengers = $maxPassengers;
		}

		public function showData()
		{
			$resultFly = "It can not fly";
			if ($this->canFly) {
				 $resultFly = "It can fly";
			}
			
			return  get_class($this) . ": Speed: ". $this->speed . ". " . $resultFly . ". Max passengers: " . $this->maxPassengers;
			

		}
	}

?>