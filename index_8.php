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
        <input type="text" name="string">
        <button type="submit">Submit</button>
    </form>
    <br>
    <br>

    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){

            $string = $_POST["string"];

            if($string == strrev($string)){
                echo "Given String is Palindrome";
            }
            else{
                echo "Given String is not Palindrome";
            }
        }
    ?>
</body>
</html>