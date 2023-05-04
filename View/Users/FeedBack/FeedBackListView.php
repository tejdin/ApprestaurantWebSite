<?php

class FeedbackListView{
    function showFeedbackListView($feedbacks){
        if (!isset($_SESSION['user'])) {
            include 'C:/xampp/htdocs/Projet/View/ressourcesphp/header.php';
        }
        else{
            include 'C:/xampp/htdocs/Projet/View/ressourcesphp/headerLogin.php';
        }

        echo '<div class="container">';
         echo '<div class="col-md-8">';
            echo '<center><h2>Feedbacks</h2> </center>';
            echo '</div>';
            echo '<div class="col-md-4">';
            echo '<a class="btn btn-primary pull-right" href="/projet/public/Addfeedback"><i class="fa fa-pencil"></i> Add Feedback</a>';
            echo '</div>';
            echo '<br>';
            echo '<br>';
        if($feedbacks!=null)
         {
          foreach($feedbacks as $feedback){
            
            echo '<div class="card mb-3 mt-2">';
            echo '<h3>Title  </h3>';
            echo '<h6>'.$feedback->getTitle().'</h6>
                <br>';
            echo '<p>'.$feedback->getBody().'</p>
                <br>';

            echo '<h6>Created By'.$feedback->getFirst_Name().' '.$feedback->getLast_Name().'</h6>
                <p>-----------------------------------------------------------------------------------------------------------------------------------------</p>
            </div>';       
       
          }

         }
         else
         {
          echo '<h2 class="card-title">No Feedbacks</h2>';
          
        
         }
            echo '</div>';
            echo '</div>';
            echo '<br>';
            echo '<br>';
            include 'C:/xampp/htdocs/Projet/View/ressourcesphp/footer.php';
    }
}