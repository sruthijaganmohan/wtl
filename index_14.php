<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, th, td{
            padding: 10px;
            border: 1px solid black;
            border-collapse: collapse;
            text-align: left;
        }
    </style>
</head>
<body>

    <h3>Enter Data</h3>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
        <input type="text" name="roll_no" placeholder="2193119">
        <input type="text" name="name" placeholder="Deepak Chouhan">
        <input type="text" name="city" placeholder="Mumbai">
        <input type="text" name="pincode" placeholder="412204">
        <button type="submit">Submit</button>
    </form>

    <br>
    <br>

    <h3>Display Data</h3>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
        <input type="text" name="search_name" placeholder="Deepak">
        <button type="submit">Display</button>
    </form>

    <br>

    <h4>The Records in Database</h4>
    <table>
        <tr>
            <th>Roll No</th>
            <th>Name</th>
            <th>City</th>
            <th>Pincode</th>
        </tr>
    <?php

        // connnect database
        $server = "localhost";
        $username = "root";
        $password = "";
        $db = "student";
        $connection = mysqli_connect($server, $username, $password, $db);
        

        // Check if request is POST
        if($_SERVER["REQUEST_METHOD"] == "POST"){

            // when we enter name to search
            if(isset($_POST["search_name"]) and $_POST["search_name"] != ""){
                $name = $_POST["search_name"];

                $search_query = "select * from student where name like '%$name%'";

                $query = mysqli_query($connection, $search_query);

                while($result = mysqli_fetch_assoc($query)){
                    $roll_no = $result["roll_no"];
                    $name = $result["name"];
                    $city = $result["city"];
                    $pincode = $result["pincode"];

                    echo "<tr> <td>$roll_no</td> <td>$name</td> <td>$city</td> <td>$pincode</td> </tr>";
                }
            }
            // when we enter no name to search, then display all results
            elseif(isset($_POST["search_name"]) and $_POST["search_name"] == ""){

                $search_query = "select * from student";
                $query = mysqli_query($connection, $search_query);
    
                while($result = mysqli_fetch_assoc($query)){
                    $roll_no = $result["roll_no"];
                    $name = $result["name"];
                    $city = $result["city"];
                    $pincode = $result["pincode"];
    
                    echo "<tr> <td>$roll_no</td> <td>$name</td> <td>$city</td> <td>$pincode</td> </tr>";
                }

            }
            // when we want to enter the data
            else{
    
                $roll_no = $_POST["roll_no"];
                $name = $_POST["name"];
                $city = $_POST["city"];
                $pincode = $_POST["pincode"];
    
                $insertQuery = " insert into student(roll_no, name, city, pincode) values('$roll_no', '$name', '$city', $pincode)";
                $query = mysqli_query($connection, $insertQuery);
    
                if($query){
                    echo "Data Saved";
                }
                else{
                    echo "Not Saved";
                }
            }

        }
    ?>
    </table>
</body>
</html>