<div class="container contrail-one-regular">
   <div class="margincontent mt-5">
      <h1>Inscription</h1>
      Vous trouverez ici le formulaire d'inscription qui vous permet de créer un compte sur <b>The Real Deal</b>.
   </div>
   <div class="mt-4 container">
      <form action="../controller/traitementinscription.php" method="post" enctype="multipart/form-data" id="formInscription">
         <div class="row">
            <div class="col">
               <div class="form-outline">
                  <label class="form-label" for="nom">Nom :</label>
                  <input type="text" id="nom" name="nom" class="form-control" required/>
                  
               </div>
            </div>
            <div class="col">
               <div class="form-outline">
                 <label class="form-label" for="prenom">Prénom :</label> 
                 <input type="text" id="prenom" name="prenom" class="form-control" required/>
                  
               </div>
            </div>
         </div>
         <div class="form-outline mb-4">
            <label class="form-label" for="email">Email :</label>
            <input type="text" id="email" name="email" class="form-control" required />
            
         </div>
         <div class="form-outline mb-4">
            <label for="age" class="form-label">Age : (si votre âge est inferieur a 18 ans, votre inscription ne sera pas validée)</label>
            <input type="number" id="age" name="age" class="form-control" required />
            
         </div>
         <div class="form-outline mb-4">
            <label class="form-label" for="mdp">Mot de passe :</label>
            <input type="password" id="mdp" name="mdp" class="form-control" />
            
         </div>
         <div class="form-outline mb-4">
            <label class="form-label" for="mdp2">Confirmation du mot de passe :</label>
            <input type="password" id="mdp2" name="mdp2" class="form-control" />
            
         </div>
         
        
         
            <button type="submit" name="btnsumbitinscr" class="btnco  mb-4">Soumettre mon inscription</button>
      </form>
   </div>
</div>
