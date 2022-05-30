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
        <select name="operation">
            <option value="all_uppercase">All Uppercase Letters</option>
            <option value="all_lowercase">All Lowercase Letters</option>
            <option value="first_uppercase">First Letter Uppercase</option>
        </select>
        <button type="submit">Submit</button>
    </form>
    <br>
    <br>

    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $string = $_POST["string"];
            $operation = $_POST["operation"];

            if($operation == "all_uppercase"){
                echo strtoupper($string);
            }
            elseif($operation == "all_lowercase"){
                echo strtolower($string);
            }
            else{
                echo ucwords($string);
            }
        }
    ?>
</body>
</html>