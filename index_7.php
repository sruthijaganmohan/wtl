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
        <input type="text" name="num">
        <button type="submit">Submit</button>
    </form>
    <br>
    <br>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $num = $_POST["num"];

            $i = 2;
            while($i < $num){
                if($num % $i == 0){
                    echo "It is not Prime Number";
                    break;
                }

                $i += 1;
            }

            if($i == $num){
                echo "Is is Prime Number";
            }
        }
    ?>
</body>
</html>