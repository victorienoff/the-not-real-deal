<?php
require '../model/connexionPDO.php';
require '../model/fonctions.php';
session_start();

if (isset($_POST['btnsumbitco'])) {
$email = htmlspecialchars($_POST['email']);
$mdp = $_POST['mdp'];


$userExists = userExist($bdd, $email);
if ($userExists) {
    
    if (password_verify($mdp, $userExists['mdp_user'])) {
        
        $_SESSION['idUser'] = $userExists['id_user'];

        
        header('location:../public/index.php?correct=identifiants');
        exit();
    } else {
        
        header('location:../public/index.php?page=8&erreur=identifiants');
        exit();
    }
} else {
    
    header('location:../public/index.php?page=8&erreur=identifiants');
    exit();
}
}
?>
