<?php
session_start();
include_once("fonctionPanier.php");

$erreur = false;

$action = (isset($_POST['action'])? $_POST['action']:  (isset($_GET['action'])? $_GET['action']:null )) ;
if($action !== null)
{
   if(!in_array($action,array('ajout', 'suppression', 'refresh')))
   $erreur=true;

   //récupération des variables en POST ou GET
   $l = (isset($_POST['l'])? $_POST['l']:  (isset($_GET['l'])? $_GET['l']:null )) ;
   $p = (isset($_POST['p'])? $_POST['p']:  (isset($_GET['p'])? $_GET['p']:null )) ;
   $q = (isset($_POST['q'])? $_POST['q']:  (isset($_GET['q'])? $_GET['q']:null )) ;
   $img = (isset($_POST['img'])? $_POST['img']:  (isset($_GET['img'])? $_GET['img']:null )) ;

   //Suppression des espaces verticaux
   $l = preg_replace('#\v#', '',$l);
   //On vérifie que $p est un float
   $p = floatval($p);

   //On traite $q qui peut être un entier simple ou un tableau d'entiers
    
   if (is_array($q)){
      $QteArticle = array();
      $i=0;
      foreach ($q as $contenu){
         $QteArticle[$i++] = intval($contenu);
      }
   }
   else
   $q = intval($q);
    
}

if (!$erreur){
   switch($action){
      Case "ajout":
         ajouterArticle($l,$q,$p,$img);
         break;

      Case "suppression":
         supprimerArticle($l);
         break;

      Case "refresh" :
         for ($i = 0 ; $i < count($QteArticle) ; $i++)
         {
            modifierQTeArticle($_SESSION['panier']['libelleProduit'][$i],round($QteArticle[$i]));
         }
         break;

      Default:
         break;
   }
}

echo '<?xml version="1.0" encoding="utf-8"?>';?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <!-- <link rel="stylesheet" href="css/stylebtk.css" /> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <title> SurfCamp - Panier</title>
</head>
<body>

    
    <?php
    //header
    include('php/header.php');

    //navbar
    $page = 'Panier';
    include('php/navbar.php'); 
    ?>

    <section class="container-fluid text-center">
        
        <div class="container">
            <h1 class="jumbotron-heading txtTailleTitre text-primary">SurfCamp Panier</h1>
        </div>

        <form action="panier.php" method="POST">
            <div class="row txtTailleTexte">
                <div class="col-2"></div>
                <div class="col-md-8">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col"> </th>
                                    <th scope="col">Produit</th>
                                    <th scope="col">Disponible</th>
                                    <th scope="col" class="text-center">Quantité</th>
                                    <th scope="col" class="text-right">Prix</th>
                                    <th> </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    if (creationPanier())
                                    {
                                    $nbArticles=count($_SESSION['panier']['libelleProduit']);
                                    if ($nbArticles <= 0)
                                    echo "<tr><td>Votre panier est vide </ td></tr>";
                                    else
                                    {
                                        for ($i=0 ;$i < $nbArticles ; $i++)
                                        { ?>
                                            <tr> 
                                            <td><img src=" <?php echo htmlspecialchars($_SESSION['panier']['imgProduit'][$i]) ?>" height='50' width='50'> </td>
                                            <td> <?php echo htmlspecialchars($_SESSION['panier']['libelleProduit'][$i]) ?></td>
                                            <td>En stock</td>
                                            <td>
                                            <div class='d-inline'>
                                            <button class="btn-sans-bordure" id="moins" onclick="modifierQTeArticle(' <?php echo htmlspecialchars(htmlspecialchars($_SESSION['panier']['libelleProduit'][$i]),3) ?>'));"><i class='bi bi-dash-square'></i></button>
                                            </div>
                                            <input type='text' class='text-center quantity' id="<?php echo htmlspecialchars($_SESSION['panier']['libelleProduit'][$i])?>" readonly='true' value="<?php echo htmlspecialchars($_SESSION['panier']['qteProduit'][$i]) ?>">
                                            <div class='d-inline'>
                                            <button class='btn-sans-bordure' id='plus' onclick="modifierQTeArticle('HUBBOARDS HOUSTON NRG');"> <i class='bi bi-plus-square'></i></button>
                                            </div>
                                            <td>
                                            <td class='text-right'><?php echo htmlspecialchars($_SESSION['panier']['prixProduit'][$i])?> €</td>
                                            <?php echo "<td class='text-right'><a class='lien-panier' href=\"".htmlspecialchars("panier.php?action=suppression&l=".rawurlencode($_SESSION['panier']['libelleProduit'][$i]))."\"><i class='bi bi-trash-fill text-danger'></i></a></td>"; ?>
                                            </tr>

                                            <?php } ?>

                                        <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><strong>Total</strong></td>
                                        <td class='text-right'><strong> <?php echo MontantGlobal() ?> €</strong></td>
                                        </tr>
                                        <?php
                                    }
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="">
                    <div class="row">
                        <div class="col-sm-12  col-md-6">
                            <button class="btn btn-block btn-light">Retourner  sur le site</button>
                        </div>
                        <div class="col-sm-12 col-md-6 text-right">
                            <button class="btn btn-lg btn-block btn-success text-uppercase">Valider</button>
                        </div>
                    </div>
                </div>

                <div class="col-2"></div>
            </div>
        </form>

    </section>

    <?php include('php/Footer.php'); ?>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/general.js"></script>
</body>
</html>