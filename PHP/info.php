<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Information</title>

    <style>
        h1{
            text-align: center;
        }
        a{
            text-decoration: none;
        }
        .button {
            margin: 5px;
            float: right;
            background-color: green;
            border: 1px solid;
            padding: 5px 10px;
            color: white;
            border-radius: 5px;
        }
        table{
            width: 100%;
            
        }
        th{
            color: rgb(18, 160, 30);
        }
        tr {
            text-align: center;
            text-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Information Form</h1>
    <form action="../PHP/store_info_data.php" method="post">
        <fieldset>
            <legend>Information</legend>
            Name: <input type="text" id="name" name="name"><br><br>
            Age: <input type="number" id="age" name="age"><br><br>
            Gender: <input type="text" id="gender" name="gender"><br><br>
            Phone: <input type="text" id="phone" name="phone"><br><br>
            Username: <input type="text" id="username" name="username"><br><br>
            Password: <input type="password" id="password" name="password"><br><br>
            <input type="reset" class="button"><input type="submit" class="button">
            
        </fieldset>
        <fieldset>
            <legend>Your information</legend>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th> Age</th>
                    <th> Gender</th>
                    <th> Phone</th>
                    <th> Username</th>
                    <th> Password</th>
                </tr>
                <tr>
                    <td><hr></td>
                    <td><hr></td>
                    <td><hr></td>
                    <td><hr></td>
                    <td><hr></td>
                    <td><hr></td>
                    <td><hr></td>
                </tr>


<?php
            include "connection.php";
            $query = "SELECT * FROM Person_info";
            $run = mysqli_query($con, $query);

            if(mysqli_num_rows($run)>0){
                while($row = mysqli_fetch_assoc($run)){
                    echo "
                    <tr>
                        <td>".$row['id']."</td>
                        <td>".$row['name']."</td>
                        <td>".$row['age']."</td>
                        <td>".$row['gender']."</td>
                        <td>".$row['phone']."</td>
                        <td>".$row['username']."</td>
                        <td>".$row['password']."</td>
                    </tr>";
                }
            }
    
?>




            </table>
            <hr>
        </fieldset>

    </form>
    
</body>
</html>