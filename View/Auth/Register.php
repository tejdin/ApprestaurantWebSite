<?php

class Register {
    public function show(){
        ?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Sign Up</title>
  <link rel="icon" href="../Images/logo.jpg">
  <link rel="stylesheet" href="/projet/public/ressources/style.css"> 
</head>

<body>
    <body>
        <header>
           <nav>
               <a href="#" class="logo">Restaurant</a>
               <div class="menu">
                   <a href="/projet/public/login" class="btn">SIGN IN</a>
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
    <div class="login-form">
	<h2>Sign Up</h2>
	<form name="f1" action="register" method="POST" onsubmit="return validateForm();" id="sing">
	
			<label for="name">First Name</label>
			<input name="Frist_name" type="text" placeholder="First Name" required onkeyup=" return verifnom(this)">
		

		
			<label for="l-name">Last Name</label>
			<input name="Last_name" type="text" placeholder="Last Name" required onkeyup=" return verifnom(this)">
		
		
			<label for="email">Email Address</label>
			<input name="email" type="email" placeholder="Email Address" required>
		

		
			<label for="pass">Password</label>
			<input name="password" id="pass" type="password" placeholder="Password" required>
		
		
			<label>
				<input type="checkbox" name="item" id="item"/>
				<span class="text-checkbox" name="item" id="item">By creating an account you agree to our <a href="#" style="color:red">Terms & Privacy</a>.</span>
			</label>
			
		    <button type="submit">Sign Up</button>
	</form>
</div>
        <?php
                include 'C:/xampp/htdocs/Projet/View/ressourcesphp/footer.php';


    
    }
}