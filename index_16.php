<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h3>Enter Data</h3>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
        <input type="text" name="user_id" placeholder="dcdeepakdc">
        <input type="text" name="user_name" placeholder="Deepak Chouhan">
        <input type="password" name="password" placeholder="********">
        <button type="submit">Submit</button>
    </form>
    <br>

    <h3>Update data</h3>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
        <input type="text" name="update_user_name" placeholder="dcdeepakdc">
        <input type="password" name="password" placeholder="**********">
        <button type="submit">Submit</button>
    </form>
    <?php

        // connect database
        $server = "localhost";
        $username = "root";
        $password = "";
        $db = "users";
        $connection = mysqli_connect($server, $username, $password, $db);

        // handle request
        if($_SERVER["REQUEST_METHOD"] == "POST"){


            if(isset($_POST["user_name"])){

                $user_id = $_POST["user_id"];
                $username = $_POST["user_name"];
                $password = $_POST["password"];

                $insert_query = "insert into users(user_id, name, password) values('$user_id', '$username', '$password')";
                $query = mysqli_query($connection, $insert_query);

            }
            else if(isset($_POST["update_user_name"])){

                $user_id = $_POST["update_user_name"];
                $password = $_POST["password"];

                echo $user_id;
                echo $password;
    
                $update_query = "update users set password='$password' WHERE user_id=$user_id";
                $query = mysqli_query($connection, $update_query);
    
                if($query){
                    echo "Data Updated";
                }
                else{
                    echo "Some Error";
                }
            }

        }
    ?>
</body>
</html>