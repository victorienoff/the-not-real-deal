<?php 
try {
    $bdd = new PDO ("mysql:host=localhost;dbname=trd;charset=UTF8","root","");
   
} catch (PDOException $e){
    echo $e ->getMessage();
    die();
}

?>