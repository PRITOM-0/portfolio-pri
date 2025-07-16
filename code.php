<?php

    include "connection.php";

    $un = $_POST["un"];
    $pass = $_POST["pass"];


    echo "<br><br>Username: $un";
    echo "<br>Password: $pass <br>";


    $query="INSERT INTO info(username,password)
            VALUES('$un','$pass')";

    $run = mysqli_query($con,$query);

    if(!$run){
        echo "<br>Submission faild !!!";
    }
    else{
        
        echo "Submission Successful !!!";
        header("location: registration.html");
    }

?>