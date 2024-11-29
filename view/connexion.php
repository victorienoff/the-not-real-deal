<section class="container bg-">
   <div class="margincontent ">
     
      <section class="h-100" >
         <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
               <div class="col-xl-10">
                  <div class="card rounded-3  signupcard contrail-one-regular">
                     <div class="row g-0">
                        <div class="col-lg-6">
                           <div class="card-body p-md-5 mx-md-4">
                              <div class="text-center">
                                 <img src="../public/assets/img/trdnoback.png"
                                    style="width: 185px;" alt="logo">
                                 <h4 class="mt-1 mb-5 pb-1 text-white">Connectez vous à votre espace<br>The Real Deal !</h4>
                              </div>
                              <form action="../controller/traitementco.php" method="POST"class="text-white">
                                 
                                 <div class="form-outline mb-4">
                                    
                                    <label class="form-label"  for="email">Email : </label>
                                    <input type="email" id="email" name="email" class="form-control"
                                       placeholder="xyz@example.com" />
                                 </div>
                                 <div class="form-outline mb-4">
                                    <label class="form-label"  for="mdp">Mot de passe : </label>
                                    <input type="mdp" id="mdp" name="mdp" class="form-control" />
                                    
                                 </div>
                                 <input type="hidden" name="source" value="connexion">

                                 <div class="text-center pt-1  pb-1">
                                    <button class="btnco  mb-3" type="submit" name="btnsumbitco">
                                        Se connecter
                                    </button>
                                    
                                 </div> 
                              </form>
                                 <div class="d-flex align-items-center justify-content-center pb-4 mt-2">
                                    <p class="mb-0 me-2 text-white">Vous n'avez pas de compte ?</p>
                                    <a type="button" href="index.php?page=6" class="btnco">S'inscrire</a>
                                 </div>
                             
                           </div>
                        </div>
                        <div class="col-lg-6 d-flex align-items-center bgimg">
                           
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
   </div>
</section>