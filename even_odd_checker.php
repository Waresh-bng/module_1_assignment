<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even Odd Checker</title>
</head>
<body>
    <div class="container">
        <h2>Even Odd Checker Form</h2>
        <form method="post" action="">
            <label for="">Input A Number</label>
            <input type="number" name="number" placeholder="Press A Number" required >
            <input type="submit" value="result" name="result_btn">
        </form>
    </div>
    <?php
    $result='';
     if (isset($_POST['result_btn'])){
        $number=$_POST['number'];
        
            if($number%2 ==0){
                $result="The number $number is even.";
            }else {
                $result="The number $number is odd.";
            }
        }
        echo $result;
    ?>
</body>
</html>