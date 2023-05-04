<?php

class Reserv {

    private $id_Reserv;
    private $first_name;
    private $last_name;
    private $email;
    private $phone_number;
    private $people_number;
    private $date;
    private $id_User;

    public function __construct($id_Reserv, $first_name, $last_name, $email, $phone_number, $people_number, $date, $id_User)
    {    
        $this->id_Reserv = $id_Reserv;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email = $email;
        $this->phone_number = $phone_number;
        $this->people_number = $people_number;
        $this->date = $date;
        $this->id_User = $id_User;
    }

    public function getId_Reserv(){
        return $this->id_Reserv;
    }

    public function getFirst_name(){
        return $this->first_name;
    }

    public function getLast_name(){
        return $this->last_name;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getPhone_number(){
        return $this->phone_number;
    }

    public function getPeople_number(){
        return $this->people_number;
    }

    public function getDate(){
        return $this->date;
    }

    public function getId_User(){
        return $this->id_User;
    }
}
