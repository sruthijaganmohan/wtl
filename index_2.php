<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h4>Enter Marks out of 500</h4>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
        <input type="text" name="marks">
        <button type="submit">Submit</button>
    </form>

    <br>
    <br>

    <h4>Your Grade Division will be</h4>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){

            $marks = $_POST["marks"];
            $percentage = ($marks * 100) / 500;

            if($percentage >= 60){
                echo "First Division";
            }
            elseif($percentage <= 59 and $percentage >= 45){
                echo "Second Divison";
            }
            elseif($percentage <= 44 and $percentage >= 33){
                echo "Third Division";
            }
            else{
                echo "Failed";
            }
        }
    ?>
</body>
</html>