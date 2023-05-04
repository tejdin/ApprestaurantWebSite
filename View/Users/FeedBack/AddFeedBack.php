<?php

class addFeedback{
   public function show(){
       include 'C:/xampp/htdocs/Projet/View/ressourcesphp/headerLogin.php';
       ?>
<div class="login-form">

<h2>Add New Feedback</h2>
<form name="f4" action="" method="POST">
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" required>
    </div>
    <div class="form-group">
        <label for="body">Description</label>
        <textarea type="text" name="Body" style="width: 380px; height: 100px;"> </textarea>  
    </div>   
    <div class="form-group">
        <button type="submit" class="bttn">Post</button>
    </div>                                  
</form>
    <a href="/projet/public/feedback" class="btn"> Back </a>
</div>
<?php
include 'C:/xampp/htdocs/Projet/View/ressourcesphp/footer.php';
   }



}