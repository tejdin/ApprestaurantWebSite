<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant</title>
    <link rel="icon" href="../Images/logo.jpg">
    <link rel="stylesheet" href="/projet/public/ressources/style.css">
</head>

<body>
    <!----------header----------->
    <header>
        <nav>
            <a href="#home" class="logo">Restaurant</a>
            <div class="menu">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="/projet/public/feedback">Feedbacks</a></li>
                    <li><a href="/projet/public/reserv">Reservation</a></li>
                </ul>
                <div>
                    <a href="/projet/public/edit">
                    <p style="color:white;  font-size: 14px; text-transform: uppercase;"> <?php 
                
                    require_once 'C:/xampp/htdocs/Projet/model/User.php';
                    $user=unserialize($_SESSION['user']);
                    echo $user->getFirst_Name()." ".$user->getLast_Name();
                    
                    ?> </p>
                    </a>
                    <br>
                    <a href="/projet/public/logout" class="btn">Log Out</a>
                </div>
            </div>
        </nav>    
     <div class="container" id="home"> 
        <div class="row">
            <div class="col-1">
                <h1>Welcome to <br><span class="logo1">Restaurant</span></h1>
                <p>Welcome to Restaurant, where we serve up a delicious menu with a cozy and inviting atmosphere.</p>
            </div>
        </div>
     </div>
    </header>