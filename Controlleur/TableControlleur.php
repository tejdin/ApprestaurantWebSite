<?php

require_once '../Services/TableService.php';
require_once '../View/Admins/D_table.php';

class TableControlleur{
    
    private $tableService;

    public function __construct(){
                $this->tableService = new TableService();
    }

    public function tablesshow(){
        $tables = $this->tableService->getAllTables();
        $view = new TableView();
        $view->show($tables);

        



       
  
    }

    public function addTable(){
     
        if(isset($_POST['emplacement']) && isset($_POST['capacity']) && isset($_POST['statut'])){
            $table = new Table(null, $_POST['emplacement'], $_POST['capacity'], $_POST['statut']);
            $this->tableService->addTable($table);
     
    }
}
    public function deleteTable($id){
            $this->tableService->deleteTable($id);
         
        
    }

    public function updateTable(){
        if(isset($_POST['emplacement']) && isset($_POST['capacity']) && isset($_POST['status'])){
            $table = new Table($_POST['id'], $_POST['emplacement'], $_POST['capacity'], $_POST['status']);
            $this->tableService->updateTable($table);
          
        }
    }




}