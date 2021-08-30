<?php
  // Start the session
  session_start();
  include_once("fonctionPanier.php");


  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "surfcamp2";
  
  //Tentative de connection à la base de données
  try {
      $bdd = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
      $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }
  catch (PDOException $e) {
      die("Erreur de connexion :".$e->getMessage());
  }

?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/styleanimation.css" />
    <title>SurfCamp - Paiement</title>
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
    $page = 'Paiement';
    include('php/navbar.php'); 
    
    ?>

    <div class="container">
    <main>

        <div class="row g-5">
            <div class="col-md-5 col-lg-4 order-md-last">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-primary">Votre Panier</span>
                <span class="badge bg-primary rounded-pill"><?php  echo count($_SESSION['panier']['libelleProduit']); ?></span>
                </h4>
                <ul class="list-group mb-3">
                    <?php
                        if (creationPanier()) {
                        $nbArticles=count($_SESSION['panier']['libelleProduit']);
                        if ($nbArticles <= 0)
                        echo "<li class=\"list-group-item d-flex justify-content-between lh-sm\">Votre Panier est vide</li>";
                        else {
                            for ($i=0 ;$i < $nbArticles ; $i++)
                            {
                                echo "<li class=\"list-group-item d-flex justify-content-between lh-sm\">";
                                echo "<div>";
                                echo "<h6 class=\"my-0\">".htmlspecialchars($_SESSION['panier']['libelleProduit'][$i])."</h6>";
                                echo "</div>"; 
                                echo "<span class=\"text-muted\">".htmlspecialchars($_SESSION['panier']['prixProduit'][$i])."€</span>";
                                echo "</li>";

                                $card_bdd_prod = $bdd->prepare('SELECT quantite 
                                FROM produit
                                WHERE denomination LIKE ?');
                                $card_bdd_prod->execute(array(htmlspecialchars($_SESSION['panier']['libelleProduit'][$i])));
                                $repCard = $card_bdd_prod->fetch();
                                $total = $repCard['quantite'] - htmlspecialchars($_SESSION['panier']['qteProduit'][$i]);
                              
                                $req = $bdd->prepare('UPDATE produit 
                                SET quantite= ? 
                                WHERE denomination LIKE ?');
                
                                $req->execute(array($repCard['quantite'],htmlspecialchars($_SESSION['panier']['libelleProduit'][$i])));

                            }
                        }
                    }
                    ?>
                    <li class="list-group-item d-flex justify-content-between">
                        <span>Total</span>
                        <strong><?php  echo MontantGlobal(); ?> €</strong>
                    </li>
                </ul>

            </div>

            <!-- Formulaire de paiement -->
            <div class="col-md-7 col-lg-8">
                <h4 class="mb-3">Informations de livraison</h4>
                <form class="needs-validation" action="index.php" novalidate>
                <div class="row g-3">
                    <div class="col-sm-6">
                        <label for="firstName" class="form-label">Prénom</label>
                        <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                        <div class="invalid-feedback">
                            Valid first name is required.
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <label for="lastName" class="form-label">Nom</label>
                        <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                        <div class="invalid-feedback">
                            Valid last name is required.
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="email" class="form-label">Email <span class="text-muted"></span></label>
                        <input type="email" class="form-control" id="email" placeholder="you@exemple.com">
                        <div class="invalid-feedback">
                            Please enter a valid email address for shipping updates.
                        </div>
                    </div>

                    <div class="col-12">
                    <label for="address" class="form-label">Addresse</label>
                    <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
                    <div class="invalid-feedback">
                        Please enter your shipping address.
                    </div>
                    </div>

                    <div class="col-12">
                        <label for="address2" class="form-label">Addresse 2 <span class="text-muted">(Optionnel)</span></label>
                        <input type="text" class="form-control" id="address2" placeholder="Apartement ou palier">
                    </div>

                    <div class="col-md-5">
                        <label for="country" class="form-label">Région</label>
                        <select class="form-select" id="country" required>
                            <option value="">Choose...</option>
                            <option>United States</option>
                        </select>
                        <div class="invalid-feedback">
                            Please select a valid country.
                        </div>
                    </div>

                    <div class="col-md-4">
                        <label for="ville" class="form-label">Ville</label>
                        <input type="text" class="form-control" id="ville" placeholder="" required>
                        <div class="invalid-feedback">
                            Town required.
                        </div>
                    </div>

                    <div class="col-md-3">
                        <label for="zip" class="form-label">Code Postal</label>
                        <input type="text" class="form-control" id="zip" placeholder="" required>
                        <div class="invalid-feedback">
                            Zip code required.
                        </div>
                </div>
            </div>

            <hr class="my-4">

            <h4 class="mb-3">Paiement</h4>

            <div class="my-3">
                <div class="form-check">
                <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
                <label class="form-check-label" for="credit">Credit card</label>
                </div>
                <div class="form-check">
                <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required>
                <label class="form-check-label" for="debit">Debit card</label>
                </div>
                <div class="form-check">
                <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required>
                <label class="form-check-label" for="paypal">PayPal</label>
                </div>
            </div>

            <div class="row gy-3">
                <div class="col-md-6">
                    <label for="cc-name" class="form-label">Nom du titulaire</label>
                    <input type="text" class="form-control" id="cc-name" placeholder="" required>
                    <small class="text-muted">Nom complet inscrit sur la carte</small>
                    <div class="invalid-feedback">
                        Name on card is required
                    </div>
                </div>

                <div class="col-md-6">
                    <label for="cc-number" class="form-label">Numéro de la carte</label>
                    <input type="text" class="form-control" id="cc-number" placeholder="" required>
                    <div class="invalid-feedback">
                        Credit card number is required
                    </div>
                </div>

                <div class="col-md-3">
                <label for="cc-expiration" class="form-label">Date d'expiration</label>
                <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                <div class="invalid-feedback">
                    Expiration date required
                </div>
                </div>

                <div class="col-md-3">
                <label for="cc-cvv" class="form-label">Code secret</label>
                <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                <div class="invalid-feedback">
                    Security code required
                </div>
                </div>
            </div>

            <hr class="my-4">

            <button class="w-100 btn btn-success btn-lg btn-paiement mb-5" type="submit">Finaliser la commande</button>
            </form>
        </div>
        </div>
    </main>

    </div>


    <!-- Footer -->
    <?php include('php/Footer.php'); ?>
    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

  </body>
</html>
