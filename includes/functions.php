<?php

session_start();


$path= '';

if(strpos($_SERVER['SCRIPT_NAME'] ,'/controller/') !== false) {
    $path= "../";
}
elseif (strpos($_SERVER['SCRIPT_NAME'] ,'/views/') !== false) {
    $path= "../../";
}
require_once $path . "model/UserDB.php";
require_once $path . "model/ContactDB.php";

$userdb = new UserDB();
$contactdb = new ContactDB();


function errorMessage($type , $message) {

   $_SESSION['erreur'] = [
    'type' => $type,
    'msg' => $message
   ];
}


// verifier la connexion au systeme
$profil = null;
if(isset($_SESSION['profil']) == false) {
    $chemin= $path. "index.php";
    errorMessage("danger" , "veillez vous connecter s'il vous plait" );
    // DIR va aider a pointer vers le fichier concerne(ca donne le chemin en dur)
    header("Location:$chemin");
}
else {
    $profil= $_SESSION['profil'];
}
?>