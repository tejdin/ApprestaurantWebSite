<?php

require_once 'C:/xampp/htdocs/Projet/Repo/ReservRepo.php';

class ReservService{

    private $reservRepo;

    public function __construct(){
        $this->reservRepo = new ReservRepo();
    }

    public function addReserv($reserv){
        echo '<script>alert("debugS:'.$reserv->getId_User().'")</script>';
        $this->reservRepo->addReserv($reserv);
    }
    
    public function getReservById($id){
        return $this->reservRepo->getReservById($id);
    }

    public function getAllReservs(){
        return $this->reservRepo->getAllReservs();
    }

    public function deleteReserv($id){
        $this->reservRepo->deleteReserv($id);
    }

    public function updateReserv($reserv){

        $this->reservRepo->updateReserv($reserv);
    }

    // count reservs
    public function countReserv(){
        return $this->reservRepo->countReservs();
    }

}