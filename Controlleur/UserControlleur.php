<?php

require_once 'C:/xampp/htdocs/Projet/Services/AuthService.php';
require_once 'C:/xampp/htdocs/Projet/Services/ReservService.php';
require_once 'C:/xampp/htdocs/Projet/Services/FeedbackService.php';
require_once 'C:/xampp/htdocs/Projet/Services/TableService.php';
require_once 'C:/xampp/htdocs/Projet/model/User.php';

include 'C:/xampp/htdocs/Projet/View/Auth/Login.php';
require_once 'C:/xampp/htdocs/Projet/View/Auth/Register.php';
require_once 'C:/xampp/htdocs/Projet/View/Users/EditProfile.php';
require_once 'C:/xampp/htdocs/Projet/View/Admins/User.php';
require_once 'C:/xampp/htdocs/Projet/View/Admins/dashbored.php';
require_once '../View/home.php';
require_once '../View/Users/home2.php';
class UserControlleur{

    private $authService;
    private $reservService;
    private $feedbackService;
    private $tableService;

    public function __construct(){
        $this->authService = new AuthService();
        $this->reservService = new ReservService();
        $this->feedbackService = new FeedbackService();
        $this->tableService = new TableService();

    }

    public function showLoginView() {
        $view = new LoginView();
        $view->show();
    }
    public function login(){
        if(isset($_POST['email']) && isset($_POST['password'])){
            $email = $_POST['email'];
            $password = $_POST['password'];


            if($this->authService->login($email, $password) && !$this->authService->isAdmin()){
                header('Location: home');
            }
            else if($this->authService->login($email, $password) && $this->authService->isAdmin()){
                header('Location: admin');
            }
            else{
                $view = new LoginView();
                $view->show();
               echo '<script>alert("Email or password incorrect")</script>';

               
            }   
        }
        
    }

    public function logout(){
        $this->authService->logout();
        header('Location: login');
    }
    public function islogged(){
    
       return $this->authService->islogged();
    }

    public function Register()
    {
        if(isset($_POST['Frist_name']) && isset($_POST['Last_name']) && isset($_POST['email']) && isset($_POST['password'])){
            $Frist_name = $_POST['Frist_name'];
            $Last_name = $_POST['Last_name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $type="customer";
            $this->authService->register($Frist_name,$Last_name,$email, password_hash($password,PASSWORD_DEFAULT),$type);
            header('Location: login');
        }
        $view = new Register();
        $view->show();
    }

    public function ShowEditView(){
        $view = new Edit();
        $view->show();
    }

    public function Edit(){
        $user=$this->authService->getUser();
        echo '<script>alert("debugS:'.$user->getId().'")</script>';
        if(isset($_POST['First_name']) && isset($_POST['Last_name']) && isset($_POST['email'])){
            $Frist_name = $_POST['First_name'];
         
            $Last_name = $_POST['Last_name'];
         
            $email = $_POST['email'];
            $password=null;

            if($_POST['password'] == '')
            {
                $password = $user->getPassword();
            }
            else
            {
                $password =  password_hash($password,PASSWORD_DEFAULT);
            }
            $this->authService->Edit($user->getId(),$Frist_name,$Last_name,$email, $password,'customer');
            $this->authService->reloadUser();
            header('Location: login');
        }
        $view = new Edit();
        $view->show();
    }

    public function ShowUserListViewAdminList(){

        
        $users = $this->authService->getAllUsers();
        $view = new UserList();
        $view->show($users);
        
    }

    public function delete($id){
        $this->authService->deleteUser($id);
        header('Location: users');
    }

    public function ShowUserListViewAdminEdit($id){
        }



    public function AddUser(){
        if(isset($_POST['Frist_name']) && isset($_POST['Last_name']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['type'])){
            $Frist_name = $_POST['Frist_name'];
            $Last_name = $_POST['Last_name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $type = $_POST['type'];
            $this->authService->register($Frist_name,$Last_name,$email, password_hash($password,PASSWORD_DEFAULT),$type);
        }

    }

    public function EditUser(){
       $user=null;
        if(isset($_POST['Frist_name']) && isset($_POST['Last_name']) && isset($_POST['Email'])){
            $user=$this->authService->getUserById($_POST['id']);
      
            $Frist_name = $_POST['Frist_name'];
         
            $Last_name = $_POST['Last_name'];
         
            $email = $_POST['Email'];
            $password=null;

            if($_POST['Password'] == '')
            {
                $password = $user->getPassword();
            }
            else
            {
                
                $password =  password_hash($_POST['Password'],PASSWORD_DEFAULT);
            }
            $this->authService->Edit($user->getId(),$Frist_name,$Last_name,$email, $password,$_POST['type']);
            if($this->authService->getUser()!=null)
            {
            if($user->getId() == $this->authService->getUser()->getId() )
            {
            $this->authService->reloadUser();
            header('Location: users');
            }
            else
            {
                header('Location: users');
            }
        }
    }
    else
    {
        echo '<script>alert(" les infos sont inccorrect")</script>';
        header('Location: users');
    }
}


    public function isAdmin(){
        return $this->authService->isAdmin();
    }

    public function ShowDashbored(){
        $users = $this->authService->countUsers();
        $reservs = $this->reservService->countReserv();
        $feedbacks = $this->feedbackService->countFeedback();
        $tables = $this->tableService->countTables();

        $view = new Dashbored();
        $view->show($reservs,$users,$feedbacks,$tables);
    }

    public function home(){
        $view = new home();
        $view->show();
    }

    public function homelogin(){
        $view = new homelogin();
        $view->show();
    }
}
?>