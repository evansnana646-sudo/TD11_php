<?php 
class Database {
    private string $dsn;
    private string $username;
    private string $password;

    public function __construct() {
        $this->dsn= "mysql:host=localhost;dbname=gescodb;port=3306;charset=utf8";
        $this->username= "root";
        $this->password= "";
    }

    public function getConnexion() {
        try {
            $pdo= new PDO($this->dsn, $this->username, $this->password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        }
        catch(PDOException $ex) {
            die("Echec de la connexion : " . $ex->getMessage());
        }
    }
}

?>