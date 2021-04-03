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
    <link rel="stylesheet" href="css/stylebtk.css" />
    <link rel="stylesheet" href="css/contact.css" />
    <title>SurfCamp - Inscription</title>
  </head>
  <body>

    <?php
        //header
        include('php/header.php');

        //navbar
        $page = 'ajouterClient';
        include('php/navbar.php'); 
    
    ?>


    <section class="container">
      <div class="row g-0 "> 
        <div class="col">
          <div class="card border-0" style="width: 100%;">
              <img class="card-img-top rounded-1 luminosite" src="images/bureau1.jpg" alt="Boutique">
              <div class="card-text txtphoto"> <h1 class="display-5 txtTailleTitre">Inscription</h1> </div>
          </div>
        </div>
      </div>

        <div class="row my-5">
          <div class="col-md"></div>

          <div class="col-md-7 col-lg-6">
            
            <div class="form">

              <form method="post" class="form-contact" id="Form1" action="verifAjoutClient.php">
                <div class="row g-3">
                    <div class="col-sm-6">
                        <label class="form-label" for="fnom">Nom</label>
                        <input class="form-control" type="text" name="fnom" id="fnom" required>
                        <span id="nomErr" style="color:red;"></span>
                    </div>

                    <div class="col-sm-6">
                        <label class="form-label" for="fprenom">Prénom</label>
                        <input class="form-control" type="text" name="fprenom" id="fprenom" required>
                        <span id="prenomErr" style="color:red;"></span>
                    </div>

                    <div class="col-12">
                        <label class="form-label" for="femail">Email</label>
                        <input class="form-control" type="email" name="femail" id="femail" placeholder="you@exemple.com" required>
                        <span id="emailErr" style="color:red;"></span>
                    </div>

                    <div class="col-sm-8">
                        <label class="form-label" for="Password">Mot de passe</label>
                        <input class="form-control" type="password" name="Password" id="Password" required>
                        <span id="nomErr" style="color:red;"></span>
                    </div>

                    <div class="col-sm-4">
                        <label class="normal" for="fdateN">Date de naissance</label>
                        <input class="normal " type="date" name="fdateN" id="fdateN" required>
                        <span id="dateNErr" style="color:red;"></span>
                    </div>

                    <div class="col-sm-6">
                        <label class="form-label" for="adresse">Adresse</label>
                        <input class="form-control" type="text" name="adresse" id="adresse" required>
                        <span id="nomErr" style="color:red;"></span>
                    </div>

                    <div class="col-sm-6">
                        <label class="form-label" for="ville">Ville</label>
                        <input class="form-control" type="text" name="ville" id="ville" required>
                        <span id="nomErr" style="color:red;"></span>
                    </div>

                </div>

                <hr class="my-4">

                <button class="w-100 btn btn-primary btn-lg" type="submit">Finaliser Inscription</button>
              </form>
          </div>

          </div>

          <div class="col-md"></div>
        </div>
    </section>

    <?php include('php/Footer.php'); ?>
    
    <script src="js/script.js"></script>

  </body>
</html>
