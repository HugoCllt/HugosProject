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
    <title>SurfCamp - contact</title>
  </head>
  <body>

  <?php
    //header
    include('php/header.php');

    //navbar
    $page = 'Contact';
    include('php/navbar.php'); 
    
    ?>

    <section class="container">
      <div class="row g-0 "> 
        <div class="col">
          <div class="card border-0" style="width: 100%;">
              <img class="card-img-top rounded-1 luminosite" src="images/bureau1.jpg" alt="Boutique">
              <div class="card-text txtphoto"> <h1 class="display-5 txtTailleTitre">Contact</h1> </div>
          </div>
        </div>
      </div>

        <div class="row my-5">

          <div class="col-md-4 mb-5 text-muted txtTailleTexte"> 
            <h4>Je serai ravie de vous aider !</h4>
            </br>N'hésitez pas à me contacter, je vous répond au plus vite.
            <br><br><br>Informations sur le traitement de vos données personnelles : Pour connaître et exercer vos droits, notamment de retrait de votre consentement à l’utilisation des données collectées par ce formulaire, veuillez consulter notre <a href="#" class="text-primary">politique de confidentialité</a> .
          </div>

          <div class="col-md-7 offset-1">
            
            <div class="form">
              <form method="Post" class="form-contact" id="Form1" action="verifContact.php" onsubmit="return validateForm();">
                  <div class="general">
                      <div class="form-contact">
                          <label class="normal" for="fnom">Nom:</label>
                          <input class="normal " type="text" name="fnom" id="fnom">
                          <span id="nomErr" style="color:red;"></span>
                      </div>
                      <div class="form-contact">
                          <label class="normal" for="fprenom">Prénom:</label>
                          <input class="normal " type="text" name="fprenom" id="fprenom">
                          <span id="prenomErr" style="color:red;"></span>
                      </div>
                      <div class="form-contact">
                          <label class="normal" for="fdatec">Date de contact:</label>
                          <input class="normal " type="date" name="fdatec" id="fdatec">
                          <span id="datecErr" style="color:red;"></span>
                      </div>
                      <div class="form-contact">
                          <label class="normal" for="femail">Email:</label>
                          <input class="normal " type="email" name="femail" id="femail">
                          <span id="emailErr" style="color:red;"></span>
                      </div>
                      <div class="form-contact">
                          <p class="form-genre">Genre:</p>
                          <input class="normal" type="radio" name="fgenre" id="homme">
                          <label for="homme">Homme</label>
                          <input class="normal" type="radio" name="fgenre" id="femme">
                          <label for="femme">Femme</label> 
                          <br><span id="genreErr" style="color:red;"></span>
                      </div>
                      <div class="form-contact">
                          <label class="normal" for="fdateN">Date de naissance:</label>
                          <input class="normal " type="date" name="fdateN" id="fdateN">
                          <span id="dateNErr" style="color:red;"></span>
                      </div>
                      <div class="form-contact">
                          <label class="normal" for="fjob">Métier:</label>
                          <select id="fjob" name="fjob" name="fjob">
                              <option value="non">Non renseigné</option>
                              <option value="ingénieure">Ingénieur</option>
                              <option value="enseignant">Enseignant</option>
                              <option value="agriculteur">Agriculteur</option>
                              <option value="commerciale">Commerciale</option>
                              <option value="restaurateur">Restaurateur</option>

                          </select>
                          <span id="metierErr" style="color:red;"></span>
                      </div>
                      <div class="form-contact">
                          <label class="normal" for="fsujet">Sujet:</label>
                          <input class="normal " type="text" name="fsujet" id="fsujet">
                          <span id="sujetErr" style="color:red;"></span>
                      </div>
                      <div class="form-contact">
                          <label class="normal" for="fcontenu">Contenu:</label>
                          <textarea name="fcontenu" id="fcontenu" cols="50" rows="5"></textarea>
                          <br> <span id="contenuErr" style="color:red;"></span>
                      </div>
                  </div>
                  <div class="form-submit text-start mt-5">
                    <input type="submit" class="submit bouton-env" value="Submit">
                    <span id="subErr" style="color:red;"></span>
                  </div>
              </form>
          </div>

          </div>
        </div>
    </section>

    <?php include('php/Footer.php'); ?>
    
    <script src="js/script.js"></script>

  </body>
</html>
