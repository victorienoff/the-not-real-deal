<nav class="navbar navbar-expand-lg navbarstyle">
  <div class="container-fluid contrail-one-regular">
    
    <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link    navbarelement"  href="index.php?page=2">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link   navbarelement"   href="index.php?page=3">Mes paris</a>
        </li>
        <li class="nav-item">
          <a class="nav-link   navbarelement" href="index.php?page=4">Mon profil</a>
        </li>
        <li class="nav-item ">
            <?php
                           session_start();
   
                           require ("../model/fonctions.php");
                           require ("../model/connexionPDO.php");
                     
                           if (isset($_SESSION['idUser'])) { // Vérifier si l'utilisateur est connecté
                      ?>
               <div class="dropdown">
                  <?php $user = recupUser($bdd, $_SESSION['idUser']);
                  
                  ?>
                  <a  class="nav-link navbarelement   dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Bonjour <?php echo $user['prenom_user'] ?></a>
                  <ul class="dropdown-menu">
                     <li><a  class="nav-link   dropdown-item" href="index.php?page=4">Mon compte</a></li>
                     <li><a  class="nav-link   dropdown-item" href="../controller/traitementdeco.php">Se deconnecter</a></li>
               </div>
               <?php
                  } else {
                  
                   ?>
               <a  class="nav-link  navbarelement  " href="index.php?page=5">se connecter</a>
               <?php
                  }
                  ?>
               
       </li>
      </ul>
    </div>
  </div>
</nav>
