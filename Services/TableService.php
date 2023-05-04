<?php

require_once '../model/Table.php';

require_once '../Repo/TableRepo.php';


class TableService{
    
        private $tableRepo;
    
        public function __construct() {
            $this->tableRepo = new TableRepository();
        }
    
        //get all tables
    
        public function getAllTables() {
            return $this->tableRepo->getAllTables();
        }
    
        //get table by id
    
        public function getTableById($id) {
            return $this->tableRepo->getTableById($id);
        }
    
        //get table by emplacement
    
        public function getTableByEmplacement($emplacement) {
            return $this->tableRepo->getTableByEmplacement($emplacement);
        }
    
        //get table by capacity
    
        public function getTableByCapacity($capacity) {
            return $this->tableRepo->getTableByCapacity($capacity);
        }
    
        //get table by status
    
        public function getTableByStatus($status) {
            return $this->tableRepo->getTableByStatus($status);
        }
    
        //add table
    
        public function addTable($table) {
            return $this->tableRepo->addTable($table);
        }
    
        //update table
    
        public function updateTable($table) {
            return $this->tableRepo->updateTable($table);
        }
    
        //delete table
    
        public function deleteTable($id) {
            return $this->tableRepo->deleteTable($id);
        }

        //count tables
        public function countTables(){
            return $this->tableRepo->countTables();
        }

    
}



