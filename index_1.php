<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, td, tr{
            border: 1px solid black;
            border-collapse: collapse;
            padding: 10px;
        }
    </style>
</head>
<body>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
        <input type="text" name="num">
        <button type="submit">Submit</button>
    </form>
    <br>
    <br>
    <table>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $num = $_POST["num"];

            for($i=1; $i<=10; $i++){
                $temp = $num * $i;
                echo "<tr><td> $temp </td></tr>";
            }
        }
    ?>
    </table>
</body>
</html>