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
        <input type="text" name="day">
        <button type="submit">Submit</button>
    </form>
    <br>
    <br>

    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){

            $day = $_POST["day"];
            switch($day){
                case 1:
                    echo "Monday";
                    break;
                case 2:
                    echo "Tuesday";
                    break;
                case 3:
                    echo "Wednesday";
                    break;
                case 4:
                    echo "THursday";
                    break;
                case 5:
                    echo "Friday";
                    break;
                case 6:
                    echo "Saturday";
                    break;
                case 7:
                    echo "Sunday";
                    break;
                default:
                    echo "Invalid Number";

            }
        }
    ?>
</body>
</html>