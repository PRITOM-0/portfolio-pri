<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News Feed</title>
    <link rel="stylesheet" href="news.css">

    <style>
        
        .card {
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 15px;
            margin: 20px 0;
            background-color: #f0f8ff;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            max-width: 90%;
            font-family: Arial, sans-serif;
            text-align: left;
        }


    </style>
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="nav1">
                <h1>PRITOM SAHA</h1>
            </div>
            <div class="nav2">
                <a href="index.html">Home</a>
                <p>skills</p>
                <p>Education</p>
                <p>Projects</p>
                <p>About</p>
                
            </div>
            <div class="nav3">
                <div class="price"><p><a href="news.php">News Feed</a></p></div>
                <div class="conatct"><p>Contact</p></div>
                <div class="Voting"><a href="voting.html">Voting</a></div>
            </div>
        </nav>
    </header>



    <div class="container">
        <div class="left">
            <h2>User List</h2><hr>
          
          
          <?php

    include "connection.php";

    $query = "SELECT * FROM `voter_info`";
    $run = mysqli_query($con,$query);
    

    if(mysqli_num_rows($run)>0){

        while($row = mysqli_fetch_assoc($run)){
            
            echo "<div class='card'>
                <h3>" .$row['FirstName']." ".$row['LastName']. "</h3>
              </div>";
        }
    }
        


?>
            
            
        </div>

        <div class="center">
            <h2>News Feed</h2><hr>
            
            
            
            
            
            
            
            
            <?php

    include "connection.php";

    $query = "SELECT * FROM `voter_info`";
    $run = mysqli_query($con,$query);
    

    if(mysqli_num_rows($run)>0){

        while($row = mysqli_fetch_assoc($run)){
            
            echo "<div class='card'>
                <h3>" .$row['FirstName']." ".$row['LastName'].  "</h3><hr><br><br>
                <p>" . $row['Post']. "</p><br>
              </div>";

        }
    }
        


?>
         
         













        </div>

        <div class="right">
            <h2>Location</h2><hr>
            
            <?php

    include "connection.php";

    $query = "SELECT * FROM `voter_info`";
    $run = mysqli_query($con,$query);
    

    if(mysqli_num_rows($run)>0){

        while($row = mysqli_fetch_assoc($run)){
            
            echo "<div class='card'>
                <h3>" .$row['Location']."</h3>
              </div>";
        }
    }
        


?>
            
        </div>
    </div>



























   

    <footer class="footer">
        <div class="con">
            <p>&copy; 2025 Pritom Saha. All rights reserved.</p>
            <ul class="links">
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Terms of Service</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
    </footer>
    <script src="votting.js"></script>
</body>
</html>