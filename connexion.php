<?php
  // Start the session
  session_start();
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/styleanimation.css" />
    <title>SurfCamp - Connexion</title>
    <meta name="description" content="SurfCamp, achetez des équipements de qulité pour aller surfer comme un professionel" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&family=Roboto:wght@300&display=swap" rel="stylesheet">
  </head>

  <body>
    
    <form action="VerifConnexion.php" method="post">
        <div class="container-fluid contact">
            <div class="row md">
                <div class="col"></div>
                <div class="col md">
                    <img class="mb-4 logo-conn" src="images/logoSurf.png" alt="logoSurf">
                    <h1 class="h3 mb-3 fw-normal">Connectez-vous</h1>
                    <div class="form-floating">
                        <input name="email" type="email" class="form-control connexion" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Adresse Email</label>
                    </div>
                    <div class="form-floating">
                        <input name="mdp" type="password" class="form-control connexion" id="floatingPassword" placeholder="Mot de Passe">
                        <label for="floatingPassword">Mot de Passe</label>
                    </div>
                    <div class="checkbox mb-3">
                        <label>
                            <input type="checkbox" value="remember-me"> Se souvenir
                        </label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary connexion" type="submit">S'identifier</button>
                    <a class="w-100 btn btn-lg btn-secondary connexion" role="button" href="ajouterClient.php">Créer votre compte</a>
                </div>
                <div class="col"></div>
            </div>
        </div>
    </form>

    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

  </body>
</html>
