

<?php
require('header.php');
?>

<form class="form-signin m-5">
  <img class="mb-4" src="https://getbootstrap.com/docs/4.5/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
  <h1 class="h3 mb-3 font-weight-normal">Se connecter</h1>
  <label for="inputEmail" class="sr-only">Email</label>
  <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
  <label for="inputPassword" class="sr-only">Mot de passe</label>
  <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="">
  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="remember-me"> Se souvenir de moi
    </label>
  </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit">Valider</button>
  <a href="register.php" class="mt-5 mb-3 text-muted">Creer un compte</a>
   
</form>


<?php
require('footer.php');
?>