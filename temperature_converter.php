<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form method="post" action="">
            <h2>This is Temperature Converting Calculator</h2>
            <input type="number" name="temperature" placeholder="Enter Tempetature" id="temperature" required><br>
            <label for="convert_temperature">Select Converting Method:</label><br>
            <select name="convert_temperature" id="convert_temperature">
                <option value="celsius_to_fahrenheit">Celsius to Fahrenheit</option>
                <option value="fahrenheit_to_celsius">Fahrenheit to Celsius</option>
            </select>
            <br>
            <input type="submit" name="convert" value="convert">
        </form>
        <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $temperature =$_POST["temperature"];
            $convert_temperature = $_POST["convert_temperature"];
            if($convert_temperature === "celsius_to_fahrenheit"){
                $result = ($temperature * 9/5) + 32;
                echo "$temperature °C is equal to $result °F";
            }elseif($convert_temperature==="fahrenheit_to_celsius"){
                $result = ($temperature - 32) * 5/9 ;
                echo "<h4>$temperature °F is equal to $result °C</h4>";
            }
        }
        ?>
    </div>
    
    
</body>
</html>