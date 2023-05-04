<?php
require_once 'C:/xampp/htdocs/Projet/DBConfig/Db.php'; 
require_once 'C:/xampp/htdocs/Projet/model/Staff.php';


class StaffRepository{
    private $db;

    public function __construct(){
        $this->db = Db::getInstance()->getConnection();
    }

    public function addStaff($staff){
        $query = "INSERT INTO staff (F_Name, Email, Phone_Number, Salaire, Job) VALUES (:f_name, :email, :phone_numb, :sal, :job)";
        $req = $this->db->prepare($query);
        $req->execute(array(
            'f_name' => $staff->getFull_name(),
            'email' => $staff->getEmail(),
            'phone_numb' => $staff->getPhone_number(),
            'sal' => $staff->getSalaire(),
            'job' => $staff->getJob(),
        ));
    }

    public function getAllStaff(){
        $query = "SELECT * FROM staff";
        $result = $this->db->query($query);
        $staffs = array();
        while ($row = $result->fetch()) {
            $staff = new Staff($row['Id_Staff'], $row['F_Name'], $row['Email'], $row['Phone_Number'], $row['Salaire'], $row['Job']);
            array_push($staffs, $staff);
        }
        return $staffs;
    }

    public function getStaffById($id){
        $query = "SELECT * FROM Staff WHERE id = $id";
        $result = $this->db->query($query);
        $row = $result->fetch();
        $staff = new Staff($row['id'], $row['f_name'], $row['email'], $row['phone_numb'], $row['sal'], $row['job']);
        return $staff;
    }

    public function deleteStaff($id){
        $query = "DELETE FROM staff WHERE Id_Staff = $id";
        $req = $this->db->prepare($query);
        $req->execute();
    }

    public function updateStaff($staff){
        $query = "UPDATE staff SET F_Name = :f_name, Email = :email, Phone_Number = :phone_numb, Salaire = :sal, Job = :job WHERE Id_Staff = :id";
        $req = $this->db->prepare($query);
        $req->execute(array(
            'f_name' => $staff->getFull_name(),
            'email' => $staff->getEmail(),
            'phone_numb' => $staff->getPhone_number(),
            'sal' => $staff->getSalaire(),
            'job' => $staff->getJob(),
            'id' => $staff->getId_Staff(),
        ));

    }
    // count number of staff

    public function countStaff(){
        $query = "SELECT COUNT(*) FROM staff";
        $result = $this->db->query($query);
        $row = $result->fetch();
        return $row;
    }

}