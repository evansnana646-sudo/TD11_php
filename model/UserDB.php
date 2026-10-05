<?php 
require_once "Database.php";

class UserDB {
    private $db;
    private $tablename;
    private $tableid;

    public function __construct() {
        $this->db= new Database();
        $this->tablename= "user";
        $this->tableid= "iduser";
    }

    public function create($nom, $email, $password) {
        $pdo= $this->db->getConnexion();
        $statement= "
            insert into $this->tablename (nom, email, password)
            values (?, ?, ?)
        ";
        $params= array($nom, $email, password_hash($password, PASSWORD_DEFAULT));
        
        $req= $pdo->prepare($statement);
        $req->execute($params);

        return intval($pdo->lastInsertId());
    }




    public function update($iduser, $nom, $email, $password) {
        $pdo= $this->db->getConnexion();
        $statement= null;
        $params= null;

        if($password != null && trim($password) != "") {
            $statement= "
                update $this->tablename set 
                nom= ?, email= ?, password= ?
                where $this->tableid = ?
            ";
            $params= array($nom, $email, password_hash($password, PASSWORD_DEFAULT), $iduser);
        }
        else {
            $statement= "
                update $this->tablename set 
                nom= ?, email= ?
                where $this->tableid = ?
            ";
            $params= array($nom, $email, $iduser);
        }

        $req= $pdo->prepare($statement);
        return $req->execute($params);
    }


    public function delete($iduser) {
        $pdo= $this->db->getConnexion();
        $statement= "
            delete from $this->tablename  
            where $this->tableid = ?
        ";
        $params= array($iduser);
        $req= $pdo->prepare($statement);
        return $req->execute($params);
    }


    public function read($iduser) {
        $pdo= $this->db->getConnexion();
        $statement= "
            select * from $this->tablename  
            where $this->tableid = ?
        ";
        $params= array($iduser);
        $req= $pdo->prepare($statement);
        $req->execute($params);
        $req->setFetchMode(PDO::FETCH_OBJ);
        return $req->fetch();
    }



    public function readall() {
        $pdo= $this->db->getConnexion();
        $statement= "
            select * from $this->tablename  
            order by $this->tableid desc
        ";
        $req= $pdo->prepare($statement);
        $req->execute();
        $req->setFetchMode(PDO::FETCH_OBJ);
        return $req->fetchAll();
    }

    public function login($email, $password) {
        $pdo= $this->db->getConnexion();
        $statement= "
            select * from $this->tablename  
            where email = ?
        ";
        $params= array($email);
        $req= $pdo->prepare($statement);
        $req->execute($params);
        $req->setFetchMode(PDO::FETCH_OBJ);
        $user= $req->fetch();

        if($user == false) {
            return false;
        }
        else if(password_verify( $password, $user->password) == false) {
            return false;
        }
        else {
            return $user;
        }
    }

}
?>