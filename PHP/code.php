<?php

    include "connection.php";

    $un = $_POST["un"];
    $pass = $_POST["pass"];

    // Insert query
    $query = "INSERT INTO `info`(username, password) VALUES('$un', '$pass')";
    $run = mysqli_query($con, $query);

    if(!$run){
        echo "<br>Submission failed!";
    } else {
        // Redirect before any output
        header("Location: ../HTML/registration.html");
        exit();
    }

?>