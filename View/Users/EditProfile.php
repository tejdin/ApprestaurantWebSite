<?php

require_once 'C:/xampp/htdocs/Projet/model/User.php';

class Edit {
    
     private $user;
    public function show() {

        $user = unserialize($_SESSION['user']);

     
        // Display the edit form
        include 'C:/xampp/htdocs/Projet/View/ressourcesphp/headerlogin.php';
        ?>
        <div class="login-form">
            <h2>Edit User</h2>
            <form name="f2" action="edit" method="POST" id="sing">
            <input type="hidden" name="id" value="<?php echo $user->getId(); ?>">
            <label for="name">First Name</label> 
            <input name="First_name" type="text" placeholder="First Name" required onkeyup=" return verifnom(this)" value="<?php echo $user->getFirst_name(); ?>">
            <label for="l-name">Last Name</label>
            <input name="Last_name" type="text" placeholder="Last Name" required onkeyup=" return verifnom(this)" value="<?php echo $user->getLast_name(); ?>">
            <label for="email">Email Address</label>
            <input name="email" type="email" placeholder="Email Address" required value="<?php echo $user->getEmail(); ?>">
            <label for="pass">Password</label>          
            <input name="password" id="pass" type="password" placeholder="Password"  value="">
            <button type="submit">Edit</button>
            </form>
        </div>

        
<?php
include 'C:/xampp/htdocs/Projet/View/ressourcesphp/footer.php';
    }
}
?>