<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        table, tr, th, td {
            border:2px solid green;
            border-collapse: collapse;
            padding: 10px;
            border-radius:5px;
        }
    </style>
</body>
</html>

<?php

    include "connection.php";

    $query = "SELECT * FROM `voter_info`";
    $run = mysqli_query($con,$query);
    $run2=$run;

    $i=1;
    if(mysqli_num_rows($run)>0){

        while($row = mysqli_fetch_assoc($run2)){
            $Voters[]= $row;
        }
        echo "<br><h2>(Voter Name)</h2><br>";
        foreach($Voters as $row){
            echo "Voter " . $i . ": " . $row['FirstName'] . "<br>";
            $i++;
        }
        echo "<br><h2>(Voter Information)</h2><br>";

        echo "
                <table>
                    <tr>
                        <th>FirstName</th>
                        <th>LastName</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>DateOfBirth</th>
                        <th>Location</th>
                        <th>NID</th>
                        <th>Phone</th>
                        <th>Code</th>
                        <th>Post</th>
                    </tr>
        
        ";
    }


    foreach($Voters as $row){
            
        echo "<tr>
            <td>".$row['FirstName']."</td>
            <td>".$row['LastName']."</td>
            <td>".$row['Username']."</td>
            <td>".$row['Password']."</td>
            <td>".$row['DateOfBirth']."</td>
            <td>".$row['Location']."</td>
            <td>".$row['NID']."</td>
            <td>".$row['Phone']."</td>
            <td>".$row['Code']."</td>
            <td>".$row['Post']."</td>
        </tr>";
    }

    echo "</table>";



?>