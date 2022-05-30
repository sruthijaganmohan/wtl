<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h4>Celcius to Fahrenheit</h4>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
        <input type="text" name="celcius">
        <button type="submit">Convert</button>
    </form>
    <h3>
    <?php 
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(isset($_POST["celcius"])){
                $celcius = $_POST["celcius"];

                $temp = $celcius * (9 / 5) + 32;
                echo $temp;
            }
        }
    ?>
    </h3>

    <br>
    <br>

    <h4>Fahrenheit to Celcius</h4>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
        <input type="text" name="faren">
        <button type="submit">Convert</button>
    </form>
    <h3>
    <?php 
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(isset($_POST["faren"])){
                $faren = $_POST["faren"];

                $temp = ($faren - 32) * 5 / 9;
                echo $temp;
            }
        }
    ?>
    </h3>

</body>
</html>