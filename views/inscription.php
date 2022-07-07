<?php
require('header.php');
?>
    <body class="text-center">
    
      <div class="container col-xl-5 px-4 py-5 shadow  ">
        <h1 class="display-5 fw-bold lh-1 mb-3">Inscription</h1>
            <div class="col-lg-6 mx-auto text-center">
               
            
        <main class="form-signin">
          <form>
            <img class="mb-4" src="./images/job.png" alt="" width="72" height="57">
            <h1 class="h3 mb-3 fw-normal">Veuillez-vous inscrire</h1>
        

            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" placeholder="Nom">
                <label for="floatingInput">Nom</label>
            </div>

            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" placeholder="Prénom">
                <label for="floatingInput">Prénom</label>
            </div>
              
            <div class="form-floating">
                <input type="tel" class="form-control" id="floatingInput" placeholder="Téléphone">
                <label for="floatingInput">Téléphone</label>
            </div>

            <div class="form-floating">
              <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
              <label for="floatingInput">Adresse e-mail</label>
            </div>
            <div class="form-floating">
              <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
              <label for="floatingPassword">Mot de passe</label>
            </div>
        
            <div class="checkbox mb-3">
              <label>
                <input type="checkbox" value="remember-me"> Se souvenir de moi
              </label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">S'inscrire</button>
          </form>
        </div>
    </div>
<?php
require('footer.php');
?>