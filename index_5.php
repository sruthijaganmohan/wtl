<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
        <input type="text" name="units">
        <button type="submit">Submit</button>
    </form>
    <br>
    <br>
    <h4>Electricity Bill is</h4>

    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){

            $units = $_POST["units"];
            $bill = 0;

            // For First 50 Units
            if($units >= 50){
                $bill += 50 * 3.5;
                $units -= 50;
            }
            else{
                $bill += $units * 3.5;
                $units -= $units;
            }

            // For First 100 Units
            if($units >= 100){
                $bill += 100 * 4;
                $units -= 100;
            }
            else{
                $bill += $units * 4;
                $units -= $units;
            }

            // For Second 100 Units
            if($units >= 100){
                $bill += 100 * 5.2;
                $units -= 100;
            }
            else{
                $bill += $units * 5.2;
                $units -= $units;
            }

            // Remaining Units
            $bill += $units * 6.5;
            $units -= $units;

            echo $bill;
        }
    ?>
</body>
</html>