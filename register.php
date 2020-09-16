

<?php
require('header.php');
if(!empty($_POST)){
    $errors=array();
    if(empty($_POST["email"])){
        $errors["email"]="Vous n avaez pas saisi d'email";

    }
   
    var_dump($errors);
 }
?>

<form class="form-signin m-5" action="" methode="POST">
  <img class="mb-4" src="https://getbootstrap.com/docs/4.5/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
  <h1 class="h3 mb-3 font-weight-normal">Se connecter</h1>
  <label for="inputEmail" class="sr-only">Email</label>
  <input type="text" id="inputEmail" class="form-control" placeholder="Email address"  name="email">
  <label for="inputPassword" class="sr-only">Mot de passe</label>
  <input type="password" id="inputPassword" class="form-control" placeholder="Mot de passe"  name="password">
  <label for="inputPassword" class="sr-only">Confirmer le Mot de passe</label>
  <input type="password" id="inputPassword" class="form-control" placeholder="Confirmer Mot de passe"  name="confirme">
  
  <button class="btn btn-lg btn-primary btn-block" type="submit">Valider</button>
  <a href="login.php" class="mt-5 mb-3 text-muted">Se connecter</a>
   
</form>


 