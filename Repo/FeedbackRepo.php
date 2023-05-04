<?php
require_once 'C:/xampp/htdocs/Projet/DBConfig/Db.php'; 
require_once 'C:/xampp/htdocs/Projet/model/Feedback.php';


class FeedbackRepository{
    private $db;

    public function __construct(){
        $this->db = Db::getInstance()->getConnection();
    }

    public function addFeedback($feedback){
        $query = "INSERT INTO feedback (User_id, Title, Body) VALUES (:id_User, :title, :body)";
        $req = $this->db->prepare($query);
        $req->execute(array(
            'id_User' => $feedback->getId_User(),
            'title' => $feedback->getTitle(),
            'body' => $feedback->getBody(),
        ));
    }

    public function getAllFeedbacks(){
        $query = "SELECT * FROM feedback";
        $result = $this->db->query($query);
        $feedbacks = array();
        while ($row = $result->fetch()) {
            $feedback = new Feedback($row['Id_post'], $row['User_id'], $row['Title'], $row['Body'], $row['Created_at']);
            array_push($feedbacks, $feedback);
        }
        return $feedbacks;
    }

    public function getFeedbackById($id){
        $query = "SELECT * FROM feedback WHERE id = $id";
        $result = $this->db->query($query);
        $row = $result->fetch();
        $feedback = new Feedback($row['id'], $row['id_User'], $row['title'], $row['body'], $row['date']);
        return $feedback;
    }

    public function getFeedbackByUserId($id){
        $query = "SELECT * FROM feedback WHERE id_User = $id";
        $result = $this->db->query($query);
        $feedbacks = array();
        while ($row = $result->fetch()) {
            $feedback = new Feedback($row['id'], $row['id_User'], $row['title'], $row['body'], $row['date']);
            array_push($feedbacks, $feedback);
        }
        return $feedbacks;
    }

    public function deleteFeedback($id){
        $query = "DELETE FROM feedback WHERE Id_post = $id";
        $req = $this->db->prepare($query);
        $req->execute();
    }

    public function updateFeedback($feedback){
        $query = "UPDATE feedback SET User_id = :id_User, title = :title, body = :body WHERE Id_post = :id";
        $req = $this->db->prepare($query);
        $req->execute(array(
            'id' => $feedback->getId(),
            'id_User' => $feedback->getId_User(),
            'title' => $feedback->getTitle(),
            'body' => $feedback->getBody(),
         
        ));

    }

    // get all users fristname and lastname who gave feedback
    public function getAllUsers(){
        $query = "SELECT DISTINCT user.firstname, user.lastname FROM user INNER JOIN feedback ON user.id = feedback.id_User";
        $result = $this->db->query($query);
        $users = array();
        while ($row = $result->fetch()) {
            $user = new User(null, $row['firstname'], $row['lastname'], null, null, null);
            array_push($users, $user);
        }
        return $users;
    }

    //count number of feedbacks

    public function countFeedbacks(){
        $query = "SELECT COUNT(*) FROM feedback";
        $result = $this->db->query($query);
        $row = $result->fetch();
        return $row[0];
    }
}


