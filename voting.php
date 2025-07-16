<?php
    include "connection.php";

    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $dob = $_POST["dob"];
    $location = $_POST["location"];
    $nid = $_POST["nid"];
    $phone = $_POST["phone"];
    $code = $_POST["code"];


    $query="INSERT INTO `voter_info`(`First Name`,`Last Name`,Username,Password,`Date Of Birth`,Location,NID,Phone,Code)
            VALUES('$fname','$lname','$username','$password','$dob','$location','$nid','$phone','$code')";

    $run = mysqli_query($con,$query);

    if(!$run){
        echo "<br>Submission faild !!!";
    }
    else{
        header("location: voting.html");
    }




    


?>