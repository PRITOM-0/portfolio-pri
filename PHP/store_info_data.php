<?php

    include "connection.php";

    
        $name = $_POST["name"] ?? '';
        $age = $_POST["age"] ?? '';
        $gender = $_POST["gender"] ?? '';
        $phone = $_POST["phone"] ?? '';
        $username = $_POST["username"] ?? '';
        $password = $_POST["password"] ?? '';

        $query = "INSERT INTO Person_info (name, age, gender, phone, username, password)
                  VALUES ('$name', '$age', '$gender', '$phone', '$username', '$password')";

        $run = mysqli_query($con, $query);

        if ($run) {
            echo "Information saved successfully!";
            header("Location: ../PHP/info.php");
        } else {
            echo "Failed to save information.";
        }

?>