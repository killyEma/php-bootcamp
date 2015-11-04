<?php

include "services/VehicleService.php";

/*function __autoload($nombre_clase)
{
	include "Models/" . $nombre_clase . '.php';
    //include "services/" . $nombre_clase . '.php';
}*/

$vehicles = VehicleService::getVehicles();

echo "<ul>";

foreach ($vehicles as $vehicle => $value) {
	echo "<li>"; echo $value->showData();
}

echo "</ul>";



?>

