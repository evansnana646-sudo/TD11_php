<?php
require_once "../includes/functions.php";

 $email = $_POST['email'] ?? '';
 $password = $_POST['password'] ?? '';

 if($email == '' || $password == '') {
    errorMessage("danger" , "veillez renseigner correctement les champs" );
    header("Location:../index.php");
 }
else {
    $user = $userdb->login($email, $password);
    if($user == false) {
      errorMessage("danger" , "echec de la connexion" );
      header("Location:../index.php");
    }
    else{
        $_SESSION['profil'] = $user;
        errorMessage("sucess" , "Bienvenue $user->nom" );
        header("Location:../views/contact/index.php");
    }

}

?>