<?php 

require_once '../model/Staff.php';

require_once '../Services/StaffService.php';

require_once '../View/Admins/staff.php';



class staffControlleur{
        
        private $staffService;
        
        function __construct() {
            $this->staffService = new StaffService();
        }
        
        public function addStaff(){
            if(isset($_POST['f_name'] ) && isset($_POST['email']) && isset($_POST['Phone_numb']) && isset($_POST['salaire']) && isset($_POST['type'])){
                $staff = new Staff(null, $_POST['f_name'], $_POST['email'], $_POST['Phone_numb'], $_POST['salaire'], $_POST['type']);
                $this->staffService->addStaff($staff);
            }   
   
        }
        public function updateStaff(){
            if(isset($_POST['f_name'] ) && isset($_POST['email']) && isset($_POST['Phone_numb']) && isset($_POST['salaire']) && isset($_POST['type'])){

                $staff = new Staff($_POST['id'], $_POST['f_name'], $_POST['email'], $_POST['Phone_numb'], $_POST['salaire'], $_POST['type']);
                $this->staffService->updateStaff($staff);
            }
        
        }
        public function deleteStaff($id){
            $this->staffService->deleteStaff($id);
        }
        public function getAllStaff(){
            $staffs = $this->staffService->getAllStaff();
            $staffView = new StaffList();
            $staffView->show($staffs);
        }
        public function getStaffById(){
  
        }
}


