<?php

require_once '../model/Table.php';

class TableRepository{

    private $db;

    public function __construct() {
        $this->db = Db::getInstance()->getConnection();
    }

    //get all tables

    public function getAllTables() {
        $query = "SELECT * FROM tables";
        $result = $this->db->query($query);
        $tables = array();
        while ($row = $result->fetch()) {
            $table = new Table($row['Id_Table'], $row['Emplacement'], $row['Capacity'], $row['Statut']);
            array_push($tables, $table);
        }
        return $tables;
    }

    //get table by id

    public function getTableById($id) {
        $query = "SELECT * FROM tables WHERE Id_table = $id";
        $result = $this->db->query($query);
        $row = $result->fetch();
        $table = new Table($row['Id_table'], $row['Emplacement'], $row['Capacity'], $row['Status']);
        return $table;
    }

    //get table by emplacement

    public function getTableByEmplacement($emplacement) {
        $query = "SELECT * FROM tables WHERE Emplacement = $emplacement";
        $result = $this->db->query($query);
        $row = $result->fetch();
        $table = new Table($row['Id_table'], $row['Emplacement'], $row['Capacity'], $row['Status']);
        return $table;
    }

    //get table by capacity

    public function getTableByCapacity($capacity) {
        $query = "SELECT * FROM tables WHERE Capacity = $capacity";
        $result = $this->db->query($query);
        $row = $result->fetch();
        $table = new Table($row['Id_table'], $row['Emplacement'], $row['Capacity'], $row['Status']);
        return $table;
    }

    //get table by status

    public function getTableByStatus($status) {
        $query = "SELECT * FROM tables WHERE Status = $status";
        $result = $this->db->query($query);
        $row = $result->fetch();
        $table = new Table($row['Id_table'], $row['Emplacement'], $row['Capacity'], $row['Status']);
        return $table;
    }

    //add new table

    public function addTable($table) {
        $query = "INSERT INTO tables (Emplacement, Capacity, Statut) VALUES ('" . $table->getEmplacement() . "','" . $table->getCapacity() . "','" . $table->getStatus() . "')";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
    }

    //update table

    public function updateTable($table) {
        $query = "UPDATE tables SET Emplacement = '" . $table->getEmplacement() . "', Capacity = '" . $table->getCapacity() . "', Statut = '" . $table->getStatus() . "' WHERE Id_table = '" . $table->getId_table() . "'";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
    }

    //delete table

    public function deleteTable($id) {
        $query = "DELETE FROM tables WHERE Id_table = $id";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
    }
    //count tables

    public function countTables() {
        $query = "SELECT COUNT(*) FROM tables";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        $count = $stmt->fetchColumn();
        return $count;
    }

}
