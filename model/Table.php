<?php

class Table{
    
        public $Id_table;
        public $Emplacement;
        public $Capacity;
        public $Status;

        public function __construct($Id_table, $Emplacement, $Capacity, $Status){
            $this->Id_table = $Id_table;
            $this->Emplacement = $Emplacement;
            $this->Capacity = $Capacity;
            $this->Status = $Status;
        }

        public function getIdTable(){
            return $this->Id_table;
        }

        public function getEmplacement(){
            return $this->Emplacement;
        }

        public function getCapacity(){
            return $this->Capacity;
        }

        public function getStatus(){
            return $this->Status;
        }   

}