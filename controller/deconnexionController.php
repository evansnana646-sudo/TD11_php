<?php
require_once "../includes/functions.php";

// supprimer toute les sessions
session_unset();

errorMessage("sucess" , "merci d'avoir utiliser notre application" );
header("Location:../index.php");

?>