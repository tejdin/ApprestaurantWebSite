<?php

class User {
    private $id;
    private $Frist_name;
    private $Last_name;
    private $Email;
    private $Password;
    private $Role;

    public function __construct($id, $Frist_name, $Last_name, $Email, $Password, $Role){
        $this->id = $id;
        $this->Frist_name = $Frist_name;
        $this->Last_name = $Last_name;
        $this->Email = $Email;
        $this->Password = $Password;
        $this->Role = $Role;
    }

    public function getId(){
        return $this->id;
    }

    public function getFirst_name(){
        return $this->Frist_name;
    }

    public function getLast_name(){
        return $this->Last_name;
    }

    public function getEmail(){
        return $this->Email;
    }

    public function getPassword(){
        return $this->Password;
    }

    public function getRole(){
        return $this->Role;
    }
}
