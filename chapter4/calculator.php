<?php

// Display errors while testing.
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Retrieve values from the form.
$milesDriven = $_POST["miles_driven"];
$gallonsUsed = $_POST["gallons_used"];
$pricePerGallon = $_POST["price_per_gallon"];

// Calculate miles per gallon.
$mpg = $milesDriven / $gallonsUsed;

// Calculate the cost of the trip.
$tripCost = $gallonsUsed * $pricePerGallon;

?>

<!doctype html>
<!-- Yana Tkachenko -->
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Trip Calculator Results</title>
</head>

<body>

    <header>
        <h1>Trip Calculations</h1>
    </header>

    <section>

        <h2>Values Entered</h2>

        <p>
            Miles Driven:
            <?php echo number_format($milesDriven); ?>
        </p>

        <p>
            Gallons Used:
            <?php echo $gallonsUsed; ?>
        </p>

        <p>
            Price per Gallon:
            <?php echo "$" . number_format($pricePerGallon, 2); ?>
        </p>

        <h2>Your Results</h2>

        <p>
            Miles Per Gallon:
            <?php echo number_format($mpg, 2); ?>
        </p>

        <p>
            Cost of the Trip:
            <?php echo "$" . number_format($tripCost, 2); ?>
        </p>

    </section>

</body>

</html>