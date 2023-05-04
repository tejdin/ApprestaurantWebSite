<?php

class Feedback{
    private $id;
    private $id_User;
    private $title;
    private $body;
    private $date;

    private $last_name;

    private $first_name;


    public function __construct($id, $id_User, $title, $body, $date){
        $this->id = $id;
        $this->id_User = $id_User;
        $this->title = $title;
        $this->body = $body;
        $this->date = $date;
    }

    // Getters

    public function getId(){
        return $this->id;
    }

    public function getId_User(){
        return $this->id_User;
    }

    public function getTitle(){
        return $this->title;
    }

    public function getBody(){
        return $this->body;
    }

    public function getDate(){
        return $this->date;
    }

    public function getLast_name(){
        return $this->last_name;
    }

    public function getFirst_name(){
        return $this->first_name;
    }

    // Setters
    public function setFristName($first_name){
        $this->first_name = $first_name;
    }

    public function setLastName($last_name){
        $this->last_name = $last_name;
    }


}