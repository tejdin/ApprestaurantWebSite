<?php

class Staff{
    private $Id_Staff;
    private $Full_name;
    private $email;
    private $phone_number;
    private $salaire;
    private $job;
    

    public function __construct($Id_Staff, $Full_name, $email, $phone_number, $salaire , $job ) {
        $this->Id_Staff = $Id_Staff;
        $this->Full_name = $Full_name;
        $this->email = $email;
        $this->phone_number = $phone_number;
        $this->salaire = $salaire;
        $this->job = $job;
    }

    // Getters
    public function getId_Staff() {
        return $this->Id_Staff;
    }

    public function getFull_name() {
        return $this->Full_name;
    }

    public function getEmail() {
        return $this->email;
    }
    
    public function getPhone_number() {
        return $this->phone_number;
    }

    public function getSalaire() {
        return $this->salaire;
    }

    public function getJob() {
        return $this->job;
    }



}
