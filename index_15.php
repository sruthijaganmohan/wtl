<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, th, td{
            border: 1px solid black;
            border-collapse: collapse;
            padding: 10px;
        }
    </style>
</head>
<body>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
        <input type="text" name="emp_no" placeholder="2193119">
        <input type="text" name="name" placeholder="Deepak Chouhan">
        <select name="department">
            <option value="Design">Design</option>
            <option value="Technical">Technical</option>
            <option value="Management">Management</option>
        </select>
        <input type="text" name="salary" placeholder="20000">
        <button type="submit">Submit</button>
    </form>

    <br>
    <br>

    <h4>Employ having salary greater than Rs 50000</h4>

    <table>
        <tr>
            <th>Employe No</th>
            <th>Name</th>
            <th>Department</th>
            <th>Salary</th>
        </tr>

        <?php
            //connect database
            $server = "localhost";
            $username = "root";
            $password = "";
            $db = "employes";
            $connection = mysqli_connect($server, $username, $password, $db);

            // Add Data
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $emp_no = $_POST["emp_no"];
                $name = $_POST["name"];
                $department = $_POST["department"];
                $salary = $_POST["salary"];

                $insert_query = "insert into employes(emp_no, name, department, salary) values($emp_no, '$name', '$department', $salary)";
                $query = mysqli_query($connection, $insert_query);
            }

            // display the employes
            $search_query = "select * from employes where salary > 50000";
            $query = mysqli_query($connection, $search_query);

            while($result = mysqli_fetch_assoc($query)){
                $emp_no = $result["emp_no"];
                $name = $result["name"];
                $department = $result["department"];
                $salary = $result["salary"];

                echo "<tr> <td>$emp_no</td> <td>$name</td> <td>$department</td> <td>$salary</td> </tr>";
            }

        ?>
    </table>
</body>
</html>