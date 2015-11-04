<?php

include "services/VehicleService.php";



$vehicles = VehicleService::getVehicles();

echo "<ul>";

foreach ($vehicles as $vehicle => $value) {
	echo "<li>"; echo $value->showData();
}

echo "</ul>";



?>

