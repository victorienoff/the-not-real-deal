<?php
require '../model/connexionPDO.php';
require '../model/fonctions.php';

if (isset($_POST['btnsumbitinscr'])) {
 
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $email = htmlspecialchars($_POST['email']);
    $mdp = htmlspecialchars($_POST['mdp']);
    $confirmmdp = htmlspecialchars($_POST['mdp2']);
    $age = htmlspecialchars($_POST['age']);
  
    if ($mdp !== $confirmmdp) {
        
        header('Location:../public/index.php?page=6&erreur=mdp');
        exit();
    }

   
    $emailExiste = userExist($bdd, $email);
    if ($emailExiste) {
        
        header('Location:../public/index.php?page=6&erreur=emailexiste');
        exit();
    }

   
    $mdphash = password_hash($mdp, PASSWORD_DEFAULT);

    
    $idInscrit = createUser($bdd, $nom, $prenom, $email, $mdphash, $age);

    if ($idInscrit) {
        
        header('Location:../public/index.php?page=2&success=userinscrit');
        exit();
    } else {
        
        header('Location:../public/index.php?page=6&erreur=inscription');
        exit();
    }
}
?>
