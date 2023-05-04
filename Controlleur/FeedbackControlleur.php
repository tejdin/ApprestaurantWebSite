<?php

require_once '../Services/FeedbackService.php';

require_once '../Repo/UserRepo.php';






require_once '../View/Admins/feedback.php';	

require_once '../View/Users/FeedBack/FeedbackListView.php';
require_once '../View/Users/FeedBack/AddFeedback.php';

class FeedbackControlleur{
    
    private $feedbackService;
    private $userRepo;


    public function __construct(){
                $this->feedbackService = new FeedbackService();
                $this->userRepo = new UserRepository();
    }

    public function feedbacksshow(){
        $feedbacks = $this->feedbackService->getAllFeedback();
        
        foreach($feedbacks as $feedback){
            $user = $this->userRepo->getUserById($feedback->getId_user());
            $feedback->setFristName($user->getFirst_Name());
            $feedback->setLastName($user->getLast_Name());
        }

        $feedbackListView = new FeedbackListView();
        $feedbackListView->showFeedbackListView($feedbacks);
        
        
    }


    public function showFeedbackView(){
        $view = new addFeedback();
        $view->show();
    }
    

    public function addFeedback(){
        if(isset($_POST['title']) && isset($_POST['Body'])){
            if($_POST['title'] == "" || $_POST['Body'] == ""){
                echo '<script>alert("feedback incorrect")</script>';
                $view = new addFeedback();
                $view->show();
                return;
            }
            $feedback = new Feedback(null,unserialize($_SESSION['user'])->getId(), $_POST['title'],$_POST['Body'],null);
            $this->feedbackService->addFeedback($feedback);
            header('Location: feedback');
        }
    }


        public function ShowFeedbackListViewAdmin(){
            $feedbacks = $this->feedbackService->getAllFeedback();
            $feedbackListView = new FeedbackListViewAdmin();
            $feedbackListView->show($feedbacks);


        }

        
        public function deleteFeedback($id){
            $this->feedbackService->deleteFeedback($id);
        }

        public function AddFeedbackAdminSide(){
        if(isset($_POST['user_id'] ) && isset($_POST['title']) && isset($_POST['body']) ){
            $user=$_POST['user_id'];
            $title = $_POST['title'];
            $body = $_POST['body'];
            $feedback = new Feedback(null,$user,$title,$body,null);
            $this->feedbackService->addFeedback($feedback);
            header('Location: feedbacklist');
        }
    }

        public function editFeedbackAdminSide(){
        if(isset($_POST['id'] ) && isset($_POST['user_id']) && isset($_POST['title']) && isset($_POST['body']) ){
            $id = $_POST['id'];
            $user=$_POST['user_id'];
            $title = $_POST['title'];
            $body = $_POST['body'];
            $feedback = new Feedback($id,$user,$title,$body,null);
            $this->feedbackService->editFeedback($feedback);
        }
    
    }   




}  