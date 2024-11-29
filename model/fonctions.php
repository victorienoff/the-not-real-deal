<?php


function recupUser($bdd, $idUser) {
    
    $reqRecupUser = $bdd->prepare('SELECT * FROM user WHERE id_user = ?');
    $reqRecupUser->execute([$idUser]);
    $user = $reqRecupUser->fetch();

    return $user;
}

function userExist($bdd, $email){
    $reqUserExists = $bdd->prepare('SELECT * FROM user WHERE mail_user = :email');
    $reqUserExists->execute([':email'=>$email]);
    $userExists = $reqUserExists->fetch();  
    return $userExists;
}
function createUser($bdd,$nom,$prenom,$email,$mdphash, $age) {
    $reqInsertUser=$bdd->prepare('INSERT INTO user(nom_user,prenom_user,mail_user,mdp_user,age_user) VALUES (?,?,?,?,?)');
    $reqInsertUser->execute([$nom,$prenom,$email,$mdphash,$age]);

    return $bdd->lastInsertId();
    
}
?>