<?php
require_once "../includes/functions.php";

$action= $_REQUEST['action'];

if($action == "create") {
    //  l'utilisation de " ?'' " signifie que si post est vide on affecte a $nom une chaine vide
    $nom = $_POST['nom'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    if($nom == '' || $email == '' || $password == '') {
        errorMessage("danger" , "l'un des champs est invalide" );
        header("Location:../views/user/edit.php");
    }
    else {
        $userdb-> create ($nom,$email,$password);
         errorMessage("sucess" , "utilisateur ajouté avec succes" );
         header("Location:../views/user/index.php");
    }

}

if($action == "update") {

    $iduser = $_POST['iduser'] ?? '';
    $nom = $_POST['nom'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    if( $iduser == '' || $nom == '' || $email == '') {
        errorMessage("danger" , "l'un des champs est invalide" );
        header("Location:../views/user/edit.php");
    }
    else {
        $userdb-> update($iduser,$nom,$email,$password);
         errorMessage("sucess" , "utilisateur modifié avec succes" );
         header("Location:../views/user/index.php");
    }

}


if($action == "delete") {
    $iduser = $_POST['iduser'] ?? '';

    if( $iduser == '' ) {
        errorMessage("danger" , "impossible de supprimer cet element" );
        header("Location:../views/user/edit.php?iduser=$iduser");
    }
    else {
        $userdb-> delete($iduser);
         errorMessage("sucess" , "utilisateur supprimé avec succes" );
         header("Location:../views/user/index.php");
    }

}


?>