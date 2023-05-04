<?php
require_once('C:/xampp/htdocs/Projet/DBConfig/Db.php');

require_once 'C:/xampp/htdocs/Projet/model/User.php';

class UserRepository{

    private $connexion;

    public function __construct(){
        $this->connexion = Db::getInstance()->getConnection();
    }

    public function getUserByEmail($email){
        $sql = "SELECT * FROM user WHERE email = :email";
        $statement = $this->connexion->prepare($sql);
        $statement->execute(array(':email' => $email));
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        if($result != null){
            $user = new User($result['Id_User'], $result['First_Name'], $result['Last_Name'], $result['Email'], $result['Pass'], $result['Type']);
            return $user;
        }

        return null;
    }

    public function getUserById($id){
        $sql = "SELECT * FROM user WHERE Id_User = :id";
        $statement = $this->connexion->prepare($sql);
        $statement->execute(array(':id' => $id));
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        if($result != null){
            $user = new User($result['Id_User'], $result['First_Name'], $result['Last_Name'], $result['Email'], $result['Pass'], $result['Type']);
            return $user;
        }
        return null;
    }

    public function addUser($user){
        $sql = "INSERT INTO user (first_name, last_name, email, Pass, Type) VALUES (:first_name, :last_name, :email, :password, :role)";
        $statement = $this->connexion->prepare($sql);
        $statement->execute(array(':first_name' => $user->getFirst_name(), ':last_name' => $user->getLast_name(), ':email' => $user->getEmail(), ':password' => $user->getPassword(), ':role' => $user->getRole()));
    }
    public function updateUser($id, $first_name, $last_name, $email, $password, $role){
        $sql = "UPDATE user SET First_Name = :first_name, Last_name = :last_name, email = :email, Pass = :password, Type = :role WHERE Id_User = :id";
        $statement = $this->connexion->prepare($sql);
        $statement->execute(array(':first_name' => $first_name, ':last_name' => $last_name, ':email' => $email, ':password' => $password, ':role' => $role, ':id' => $id));     
    }
    public function deleteUser($id){
        $sql = "DELETE FROM user WHERE Id_User = :id";
        $statement = $this->connexion->prepare($sql);
        $statement->execute(array(':id' => $id));
    }



    public function getAllUsers(){
        $sql = "SELECT * FROM user";
        $statement = $this->connexion->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        $users = array();
        foreach($result as $row){
            $user = new User($row['Id_User'], $row['First_Name'], $row['Last_Name'], $row['Email'], $row['Pass'], $row['Type']);
            $users[] = $user;
        }
        return $users;
    }  
    
    // count users

    public function countUsers(){
        $sql = "SELECT COUNT(*) FROM user";
        $statement = $this->connexion->prepare($sql);
        $statement->execute();
        $result = $statement->fetchColumn();
        return $result;
    }


    
}