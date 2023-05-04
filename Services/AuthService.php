<?php

    require_once 'C:/xampp/htdocs/Projet/Repo/UserRepo.php';
    require_once 'C:/xampp/htdocs/Projet/model/User.php';

class AuthService{


    private $userRepo;

    public function __construct(){
        $this->userRepo = new UserRepository();
    }

    public function login($email, $password){
        $user = $this->userRepo->getUserByEmail($email);
        if($user != null){

            if(password_verify($password, $user->getPassword())){
                $_SESSION['user'] = serialize($user);
                return true;
            }
        }
        return false;
    }

    public function getUserById($id){
        return $this->userRepo->getUserById($id);
    }

    public function logout(){
        unset($_SESSION['user']);
    }

    public function isLogged(){
        return isset($_SESSION['user']);
    }

    public function getUser(){
        if($this->isLogged()){
            return unserialize($_SESSION['user']);
        }
        return null;
    }

    public function isAdmin(){
        if($this->isLogged()){
            return $this->getUser()->getRole() == 'admin';
        }
        return false;
    }

    public function isUser(){
        if($this->isLogged()){
            return $this->getUser()->getRole() == 'user';
        }
        return false;
    }

    public function reloadUser(){
        $user = $this->userRepo->getUserById($this->getUser()->getId());
        $_SESSION['user'] = serialize($user);
        
    }   

    public function register($Frist_name,$Last_name,$email, $password, $role){
        $user = new User(null, $Frist_name,$Last_name,$email, $password, $role);
        $this->userRepo->addUser($user);
    }
    
    public function Edit($id,$Frist_name,$Last_name,$email, $password, $role){
 
        $this->userRepo->updateUser($id,$Frist_name,$Last_name,$email, $password, $role);
    }

    //get all users
    public function getAllUsers(){
        return $this->userRepo->getAllUsers();
    }
    
    function deleteUser($id){
        if($this->isLogged()){
            if($this->getUser()->getId() == $id){
                $this->logout();
            }
        }

        $this->userRepo->deleteUser($id);

    }

    public function countUsers(){
        return $this->userRepo->countUsers();
    }


}