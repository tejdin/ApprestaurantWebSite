<?php

require_once 'C:/xampp/htdocs/Projet/Repo/StaffRepo.php';

class StaffService{

    private $staffRepo;

    public function __construct(){
        $this->staffRepo = new StaffRepository();
    }

    public function addStaff($staff){
        $this->staffRepo->addStaff($staff);
    }
    
    public function getStaffById($id){
        return $this->staffRepo->getStaffById($id);
    }

    public function getAllStaff(){
        return $this->staffRepo->getAllStaff();
    }

    public function deleteStaff($id){
        $this->staffRepo->deleteStaff($id);
    }

    public function updateStaff($staff){

        $this->staffRepo->updateStaff($staff);
    }

}