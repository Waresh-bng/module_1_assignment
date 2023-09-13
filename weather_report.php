<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather Report</title>
</head>
<body>
<?php
    // Define the temperature variable
    $temperature = 26; // Change this value to the desired temperature

    // Provide weather information based on temperature
    if ($temperature < 0) {
        echo "It's freezing!";
    } elseif ($temperature >= 0 && $temperature <= 25) {
        echo "It's cool.";
    } elseif ($temperature > 25) {
        echo "It's warm.";
    }
    ?>
</body>
</html>