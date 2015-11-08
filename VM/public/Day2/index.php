<?php
include "Models/Bike.php";
include "Models/Car.php";
include "Models/Plane.php";
// define variables and initialize with empty values
$passengers="";
$using="";
$vehicle="";
$errors="";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    if (empty($_POST["using"])) 
    {
        $errors ="Please select one travel option";
    }
    else 
    {
        
        $using = $_POST["using"];
        
        if (!empty($using) ) {
            switch ($using) 
            {
                case 'plane':
                    $vehicle = new Plane();  
                break;
                case 'car':
                    $vehicle = new Car();  
                break;
                case 'bike':
                    $vehicle = new Bike();
                break;
            }
        }

        $passengers = filter_var($_POST["passengers"],FILTER_SANITIZE_NUMBER_INT);
        
        if ($passengers != "")
        {
            $max = $vehicle->getMaxPassengers();
            if ($passengers <= $max) 
            {
                header("Location: http://192.168.33.10/Day2/success.php");
                exit;
            }
            else{
                $errors = "You can't travel on a " . $vehicle->getTypeVehicle() . " with ". $passengers . 
                            " passengers. The maximun number of allowed passengers for the selected transport is ".
                            $vehicle->getMaxPassengers() . ".";    
            }
        }
        else
        {
            $errors = "Please insert a number valid";
        }

    }    

}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dia 2</title>
    <link rel="StyleSheet" href="static/alert.css" type="text/css">
</head>
<body>

    <form name="form2" method="post" acion="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    </br>
    <span class="error" ><?php echo $errors?></span>
    </br>
    </br>
    </br>
    <label>Travel using a</label></br>
    <div class="radio-toolbar">
        <input type="radio" name="using" <?php if (isset($using) && $using == "plane") echo "Checked"; ?> value="plane" >Plane </br>
        <input type="radio" name="using" <?php if (isset($using) && $using == "car") echo "Checked"; ?> value="car" >Car </br>
        <input type="radio" name="using" <?php if (isset($using) && $using == "bike") echo "Checked"; ?> value="bike" >Bike </br>
    
    </div>
    <label>Passengers:</label></br>
    <input type="text" name="passengers"></br>
    <input type="submit" value="Travel !">

</form>


</body>
</html>
