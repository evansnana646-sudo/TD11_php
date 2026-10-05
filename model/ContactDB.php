<?php
require_once 'Database.php';


class ContactDB {
    private $db;
    private $tablename;
    private $tableid;

    public function __construct() {
        $this-> db= new Database();
        $this-> tablename= "contact";
        $this-> tableid= "idcontact";
    }

    public function create($iduser, $nom, $prenom, $telephone, $email, $datecontact) {
        $pdo= $this->db->getConnexion();
        
        $statement= "
        insert into $this->tablename (iduser, nom, prenom, telephone, email, datecontact)
        values(?, ?, ?, ?, ?, ?)
        ";
        $params= array($iduser, $nom, $prenom, $telephone, $email, $datecontact);

        $req= $pdo->prepare($statement);
        $req->execute($params);

        return intval($pdo->lastInsertId());

    }


     public function update($idcontact,$nom, $prenom, $telephone, $email, $datecontact) {
        $pdo= $this->db->getConnexion();
        $statement= null;
        $params= null;

        $statement= "
           update $this->tablename set
           nom= ?, prenom=?, telephone=?, email=?, datecontact=?
           where $this->tableid= ?
          ";
          $params= array($nom, $prenom, $telephone, $email, $datecontact,$idcontact);

        $req= $pdo->prepare($statement);
        return $req-> execute($params);

     }


     public function delete($idcontact) {
        $pdo= $this->db->getConnexion();
         $statement= "
           delete $this->tablename 
           where $this->tableid= ?
         ";
         $params= array($idcontact);

         $req= $pdo->prepare($statement);
         return $req-> execute($params);
     }


     public function read() {
        $pdo= $this->db->getConnexion();
         $statement= "
           select * from $this->tablename 
           where $this->tableid= ?
          ";
           $params= array($idcontact);

           $req= $pdo->prepare($statement);
           $req-> execute($params);
           $req-> setFetchMode(PDO::FETCH_OBJ);
           return $req->fetch();
     }

    public function readall() {
        $pdo= $this->db->getConnexion();
         $statement= "
           select * from $this->tablename 
           order by $this->tableid desc
          ";
           $req= $pdo->prepare($statement);
           $req-> execute();
           $req-> setFetchMode(PDO::FETCH_OBJ);
           return $req->fetchall();
     }

     public function readIduser($iduser) {
         $pdo= $this->db->getConnexion();
         $statement= "
           select * from $this->tablename 
           where iduser = ?
          ";

           $params= array($iduser);
           $req= $pdo->prepare($statement);
           $req-> execute($params);
           $req-> setFetchMode(PDO::FETCH_OBJ);
           return $req->fetchall();
     }


}

 

?>