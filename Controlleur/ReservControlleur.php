<?php

require_once 'C:/xampp/htdocs/Projet/Services/ReservService.php';
require_once 'C:/xampp/htdocs/Projet/model/Reserv.php';
require_once 'C:/xampp/htdocs/Projet/model/User.php';
require_once 'C:/xampp/htdocs/Projet/View/Users/ReservView.php';
require_once 'C:/xampp/htdocs/Projet/View/Admins/reservation.php';



class ReservControlleur{
    private $reservService;
    private $authService;

    public function __construct(){
        $this->reservService = new ReservService();
        $this->authService = new AuthService();
    }

    public function showReservView(){
        $view = new ReservView();
        $view->show();
    }

    public function addReserv(){
        if(isset($_POST['Phone_number'] ) && isset($_POST['Date']) && isset($_POST['Number_of_people']) && (strtotime($_POST['Date']) > strtotime(date("Y-m-d")))){
            $Phone_number = $_POST['Phone_number'];
            $Date = $_POST['Date'];
            $Number_of_people = $_POST['Number_of_people'];
            $user=unserialize($_SESSION['user']);

            $reserv = new Reserv(null,$user->getFirst_name(),$user->getLast_name(),$user->getEmail(), $Phone_number, $Number_of_people,$Date, $user->getId());        
        
            
            $this->reservService->addReserv($reserv);
            header('Location: home');
        }
        else{
            echo '<script>alert("Date incorrect")</script>';
            $view = new ReservView();
            $view->show();
        }
    }

    public function showAllReserv(){
        $reservs = $this->reservService->getAllReservs();
        $view = new ReservationViewAdminSide();
        $view->showReservationView($reservs);
    }


    public function deleteReserv($id){
            $this->reservService->deleteReserv($id);
        
    }

    public function AddReservAdminSide(){
 
        if(isset($_POST['Phone_numb'] ) && isset($_POST['date']) && isset($_POST['Ppl_numb']) && (strtotime($_POST['date']) > strtotime(date("Y-m-d"))) && isset($_POST['user_id'])){
            $Phone_number = $_POST['Phone_numb'];
         
            $Date = $_POST['date'];
            $Number_of_people = $_POST['Ppl_numb'];
            $id_user = $_POST['user_id'];
            $user=$this->authService->getUserById($id_user); 
            $reserv = new Reserv(null,$user->getFirst_name(),$user->getLast_name(),$user->getEmail(), $Phone_number, $Number_of_people,$Date, $user->getId());
            $this->reservService->addReserv($reserv);
        }
        else{
                     echo '<script>alert("vous information sont incorrect")</script>';
        }
    }   

    public function updateReserv(){
        if(isset($_POST['Phone_numb'] ) && isset($_POST['user_id']) && isset($_POST['date']) && isset($_POST['Ppl_numb']) && (strtotime($_POST['date']) > strtotime(date("Y-m-d")))){
            $Phone_number = $_POST['Phone_numb'];
            if($_POST['newDate'] != null){           
                $Date = $_POST['newDate'];
            }
            else{
                $Date = $_POST['date'];
            }
            $Number_of_people = $_POST['Ppl_numb'];
            $id = $_POST['id_reserv'];
            $id_user = $_POST['user_id'];
            $user=$this->authService->getUserById($id_user);

            $reserv = new Reserv($id,$user->getFirst_name(),$user->getLast_name(),$user->getEmail(), $Phone_number, $Number_of_people,$Date, $user->getId());
            $this->reservService->updateReserv($reserv);
     
        }
        else{
            echo '<script>alert("Date incorrect")</script>';
            $view = new ReservView();
            $view->show();
        }
    }

}
