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

    <h4>Factorial of given Number is</h4>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){

            $num = $_POST["num"];

            function fact($num){
                if($num == 1 or $num == 0) return 1;
                return $num * fact($num - 1);
            }

            echo fact($num);
        }
    ?>
</body>
</html>