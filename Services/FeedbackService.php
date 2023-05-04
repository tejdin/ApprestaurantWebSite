<?php

require_once '../Repo/FeedbackRepo.php';

class FeedbackService{
    
        private $feedbackRepo;
       
        public function __construct(){
            $this->feedbackRepo = new FeedbackRepository();
           
        }

        public function editFeedback($feedback){
            $this->feedbackRepo->updateFeedback($feedback);
      
        }
    
        public function addFeedback($feedback){
            $this->feedbackRepo->addFeedback($feedback);
        }
    
        public function getAllFeedback(){
            return $this->feedbackRepo->getAllFeedbacks();
        }
    
        public function getFeedbackById($id){
            return $this->feedbackRepo->getFeedbackById($id);
        }
    
        public function updateFeedback($feedback){
            $this->feedbackRepo->updateFeedback($feedback);
        }
    
        public function deleteFeedback($id){
            $this->feedbackRepo->deleteFeedback($id);
        }

        //count feedbacks
        public function countFeedback(){
            return $this->feedbackRepo->countFeedbacks();
        }

        



}