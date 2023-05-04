<?php

require_once '../DBConfig/Db.php';
require_once '../model/Reserv.php';
require_once '../model/User.php';



class ReservRepo {

    private $db;

    public function __construct() {
        $this->db = Db::getInstance()->getConnection();
    }


    //add new reserv by getters of reserv class

    public function addReserv($reserv) {
    
        $query = "INSERT INTO reservation (First_Name, Last_Name, Email, Phone_Number, Number_People, Date_Reservation, User_id) VALUES ('" . $reserv->getFirst_Name() . "','" . $reserv->getLast_Name() . "','" . $reserv->getEmail() . "','" . $reserv->getPhone_Number() . "','" . $reserv->getPeople_number() . "','" . $reserv->getDate() . "','" . $reserv->getId_User() . "')";
        $stmt= $this->db->prepare($query);
         $stmt->execute();
    }


    //get all reservs
    public function getAllReservs() {
        $query = "SELECT * FROM reservation";
        $result = $this->db->query($query);
        $reservs = array();
        while ($row = $result->fetch()) {
            $reserv = new Reserv($row['Id_Reservation'], $row['First_Name'], $row['Last_Name'], $row['Email'], $row['Phone_Number'], $row['Number_People'], $row['Date_Reservation'], $row['User_id']);
            array_push($reservs, $reserv);
        }
        return $reservs;
    }

    //get reserv by id

    public function getReservById($id) {
        $query = "SELECT * FROM reservation WHERE Id_Reservation = $id";
        $result = $this->db->query($query);
        $row = $result->fetch();
        $reserv = new Reserv($row['Id_Reservation'], $row['First_Name'], $row['Last_Name'], $row['Email'], $row['Phone_Number'], $row['Number_People'], $row['Date_Reservation'], $row['User_id']);
        return $reserv;
    }

    //get reserv by user id

    public function getReservByUserId($id) {
        $query = "SELECT * FROM reservation WHERE User_id = $id";
        $result = $this->db->query($query);
        $reservs = array();
        while ($row = $result->fetch()) {
            $reserv = new Reserv($row['Id_Reservation'], $row['First_Name'], $row['Last_Name'], $row['Email'], $row['Phone_Number'], $row['Number_People'], $row['Date_Reservation'], $row['User_id']);
            array_push($reservs, $reserv);
        }
        return $reservs;
    }   

    //get reserv by date

    public function getReservByDate($date) {
        $query = "SELECT * FROM reservation WHERE Date_Reservation = $date";
        $result = $this->db->query($query);
        $reservs = array();
        while ($row = $result->fetch()) {
            $reserv = new Reserv($row['Id_Reservation'], $row['First_Name'], $row['Last_Name'], $row['Email'], $row['Phone_Number'], $row['Number_People'], $row['Date_Reservation'], $row['User_id']);
            array_push($reservs, $reserv);
        }
        return $reservs;
    }

    //get reserv by date and user id

    public function getReservByDateAndUserId($date, $id) {
        $query = "SELECT * FROM reservation WHERE Date_Reservation = $date AND User_id = $id";
        $result = $this->db->query($query);
        $reservs = array();
        while ($row = $result->fetch()) {
            $reserv = new Reserv($row['Id_Reservation'], $row['First_Name'], $row['Last_Name'], $row['Email'], $row['Phone_Number'], $row['Number_People'], $row['Date_Reservation'], $row['User_id']);
            array_push($reservs, $reserv);
        }
        return $reservs;
    }

    //get reserv by date and user id

    public function getReservByDateAndUserIdAndReservId($date, $id, $id_reserv) {
        $query = "SELECT * FROM reservation WHERE Date_Reservation = $date AND User_id = $id AND Id_Reservation = $id_reserv";
        $result = $this->db->query($query);
        $reservs = array();
        while ($row = $result->fetch()) {
            $reserv = new Reserv($row['Id_Reservation'], $row['First_Name'], $row['Last_Name'], $row['Email'], $row['Phone_Number'], $row['Number_People'], $row['Date_Reservation'], $row['User_id']);
            array_push($reservs, $reserv);
        }
        return $reservs;
    }

    public function deleteReserv($id) {
        $query = "DELETE FROM reservation WHERE Id_Reservation = $id";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
    }

    public function updateReserv($reserv) {
        $query = "UPDATE reservation SET First_Name = '" . $reserv->getFirst_Name() . "', Last_Name = '" . $reserv->getLast_Name() . "', Email = '" . $reserv->getEmail() . "', Phone_Number = '" . $reserv->getPhone_Number() . "', Number_People = '" . $reserv->getPeople_number() . "', Date_Reservation = '" . $reserv->getDate() . "', User_id = '" . $reserv->getId_User() . "' WHERE Id_Reservation = '" . $reserv->getId_Reserv(). "'";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
    
    }

    //count number of reservs

    public function countReservs() {
        $query = "SELECT COUNT(*) FROM reservation";
        $result = $this->db->query($query);
        $row = $result->fetch();
        return $row[0];
    }



    

















}
