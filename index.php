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
    <title>SurfCamp - Accueil</title>
    <meta name="description" content="SurfCamp, achetez des équipements de qulité pour aller surfer comme un professionel" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&family=Roboto:wght@300&display=swap" rel="stylesheet">
  </head>

  <body>
    <!-- header -->
    <?php
    //header
    include('php/header.php');

    //navbar
    $page = 'Accueil';
    include('php/navbar.php'); 
    
    ?>

    <section>
      <div class="container-fluid">
        <div class="row">
          <div class="col cobvn">
            <div class="card border-0 cardbvn" style="width: 100%;">
                <img class="card-img-top rounded-1 imgbvn" src="images/surfcampban.png" alt="SurfCamp bannière de surf d'une vague">
                  <div class="textbvn">
                    <h1 class="card-title text-center display-5 txtTailleTitre"> SurfCamp <br> <div class="DivSep my-2"></div> Vente d'équipements pour les sports de glisse <br></h1> <p class="display-6 text-center txtTitreAccueuilMax"></p> 
                  </div>
                  <p class="card-text text-center lead txtTailleInter txtGrandMargin">Achat de planche de surf neuves. Surfboards shortboards, longboards, hybrides, egg, fish des meilleurs surf shops. Bienvenue au paradis des surfboards</p>
            </div>
          </div>
        </div>
        <div class="row">
            <div class="col"> 
                <h2 class="card-title text-center display-5 txtTailleTitre">Surf où tu veux</h2>
                <img src="images/sunset.jpg" class="d-block w-100" alt="sunset">
            </div>
            <div id="carouselExampleIndicators" class="carousel slide col-2" data-bs-ride="carousel">
              <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>
              <div class="carousel-inner">
                  <div class="carousel-item active">
                  <img src="images/imgbtk/combinaison/combiDevant.png" class="d-block w-100" alt="combiDevant">
                  </div>
                  <div class="carousel-item">
                  <img src="images/imgbtk/surfs/Surf3.png" class="d-block w-100" id="Surf3" alt="Surf3">
                  </div>
                  <div class="carousel-item">
                  <img src="images/imgbtk/body/palmes.png" class="d-block w-100" alt="palmes">
                  </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
              </button>
            </div>
            <div class="col">
                <h2 class="card-title text-center display-5 txtTailleTitre">Surf quand tu veux</h2>
                <img src="images/goliath.JPG" class="d-block w-100" alt="goliath">
            </div>
        </div>
        <div class="row my-5">
          <h2 class="text-center display-4 txtTailleTitre">La boutique SurfCamp c'est</h2>
          <div class="row mx-auto">
            <div class="DivSepT2 mb-5 mt-2 rounded-3 mx-auto"></div>
            <!-- <hr class="mb-5 mt-3 DivSepT2"> -->
          </div>
          
          <div class="col-sm-4 mx-auto">
            <div class="card border-0" style="width: 100%;">
              <img class="card-img-top" src="images/icon/crown.svg" alt="#" width="120" height="120" class="mx-auto">
              <div class="card-body">
                <h4 class="card-title text-center lead txtTailleInter">Des planches de qualité supérieure</h4>
              </div>
            </div>
          </div>

          <div class="col-sm-4 mx-auto ">
            <div class="card border-0" style="width: 100%;">
              <img class="card-img-top" src="images/icon/life-saver.svg" alt="#" width="120" height="120" class="mx-auto">
              <div class="card-body">
                <h4 class="card-title text-center lead txtTailleInter">Matériaux durables et recyclables</h4>
              </div>
            </div>
          </div>

          <div class="col-sm-4 mx-auto">
            <div class="card border-0" style="width: 100%;">
              <img class="card-img-top" src="images/icon/surfing.svg" alt="#" width="120" height="120" class="mx-auto">
              <div class="card-body">
                <h4 class="card-title text-center lead txtTailleInter">Des planches pour toute sorte de vagues</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>



    <!-- Section image -->
    <div class="container pt-5">
      <!-- E1 -->
      <div class="row g-4 py-4">
        <!-- img actu -->
        <div class="col-lg-6 py-4 ">
          <a href="produit.php?cat=Surfs">
            <div class="card border-0 carte" style="width: 100%;">
              <img class="card-img-top rounded-1 image-zoom" src="images/AccSurf.jpg" alt="Les Surfs">
              <div class="bordure"></div>
              <div class="ticketbas txtTailleTitre">Les Surfs</div>
            </div>
          </a>
        </div>
        <!-- img btk -->

          <div class="col-lg-6 py-4 ">
            <a href="produit.php?cat=Combinaisons">
              <div class="card border-0 carte" style="width: 100%;">
                <img class="card-img-top rounded-1 image-zoom" src="images/AccCombinaison.jpg" alt="Les Combinaisons">
                <div class="bordure"></div>
                <div class="ticketbas txtTailleTitre">Les Combinaisons</div>
              </div>
            </a>
          </div>
      </div>
      <!-- Fin E1 -->
      <!-- E2 -->
      <div class="row g-4 mb-5">
        <!-- img contact -->
        <div class="col-lg-4 py-2 ">
          <a href="produit.php?cat=BodyBoards">
            <div class="card border-0 carte" style="width: 100%;">
              <img class="card-img-top rounded-1 image-zoom" src="images/AccBodyBoard2.jpg" alt="Les BodyBoards">
              <div class="bordure"></div>
              <div class="ticketbas txtTailleTitre">Les BodyBoards</div>
            </div>
          </a>
        </div>
        <!-- img Bois -->
        <div class="col-lg-4 py-2 ">
            <a href="produit.php?cat=Accessoires">
              <div class="card border-0 carte" style="width: 100%;">
                <img class="card-img-top rounded-1 image-zoom" src="images/AccAccessoires.jpg" alt="Les Accessoires">
                <div class="bordure"></div>
                <div class="ticketbas txtTailleTitre">Les Accessoires</div>
              </div>
            </a>
        </div>
        <!-- img Réalisation -->
        <div class="col-lg-4 py-2 ">
          <a href="PageSecondaire/contact.php">
            <div class="card border-0 carte" style="width: 100%;">
              <img class="card-img-top rounded-1 image-zoom" src="images/AccCombinaison2.jpg" alt="Contactez-nous">
              <div class="bordure"></div>
              <div class="ticketbas txtTailleTitre">Contactez-nous</div>
            </div>
          </a>
        </div>
      </div>
    </div>



    <!-- Footer -->
    <?php include('php/Footer.php'); ?>
    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

  </body>
</html>
