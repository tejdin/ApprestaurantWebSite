<?php
class LoginView {
    public function show() {
        ?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Sign In</title>
  <link rel="icon" href="../Images/logo.jpg">
  <link rel="stylesheet" href="/projet/public/ressources/style.css"> 
</head>

<body>
    <body>
        <header>
           <nav>
               <a href="#" class="logo">Restaurant</a>
               <div class="menu">
                   <a href="/projet/public/register" class="btn">SIGN UP</a>
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

        <!-- formulaire -->
<div class="login-form">
	<h2>Sign In</h2>
    <form name="f2" action="login" method="POST" id="sing">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="pass" name="password" required>
        </div>
        <div class="form-group">
            <button type="submit" class="bttn">Login</button>
        </div>
  </form>
</div>
        <?php
        include 'C:/xampp/htdocs/Projet/View/ressourcesphp/footer.php';
    }
}
