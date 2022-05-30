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

            while($num > 1){
                if($num % 4 != 0){
                    echo "Given Number is not power of 4";
                    break;
                }
                $num = $num / 4;
            }
            
            if($num == 1){
                echo "Given Number is power of 4";
            }
        }
    ?>
</body>
</html>