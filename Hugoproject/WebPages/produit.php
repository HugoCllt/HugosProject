<?php
// Start the session
session_start();
$page = htmlspecialchars($_GET['cat']);



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

$req = $bdd->prepare('SELECT lienImage, denomination, saison, descriptionProd, prix, quantite, titre 
FROM produit, categorie
WHERE titre LIKE ?
AND produit.idCategorie = categorie.idCategorie');

$req->execute(array($page));

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/stylebtk.css" />
    <title> SurfCamp - <?php echo $page ?></title>
</head>

<body>


    <?php
    //header
    include('php/header.php');

    //navbar
    include('php/navbar.php');
    ?>

    <section class="container">
        <p class="fs-1 text-center colyel "><?php echo $page ?></p>
        <hr class="mb-5">

        <?php 
            if (isset($_SESSION["prenom"]) && $_SESSION["prenom"] == "admin") {
                echo "<div class=\"col-12 text-center\">";
                echo "<button type=\"button\" id=\"bouton\" class=\"btn colyel my-4\">Afficher Stock</button>";
                echo "</div>";
            }
        ?>


        <?php
        
            while ($donnees = $req->fetch()) { ?>

                <div class="row">
                    <!-- Image -->
                    <div class="col-lg-5 mt-5 image-boutique">
                        <div class="card border-0 carte" style="width: 100%;">
                            <img class="card-img-top rounded-1 image-zoom" id="<?php echo $donnees['lienImage']; ?>" src="images/imgbtk/<?php echo $page; ?>/<?php echo $donnees['lienImage']; ?>.png" alt="<?php echo $donnees['lienImage']; ?>" onmouseover="agrandir('<?php echo $donnees['lienImage']; ?>')" onmouseout="diminuer('<?php echo $donnees['lienImage']; ?>')">
                        </div>
                    </div>

                    <!-- Caractéristiques -->
                    <div class="col-lg-6 my-4 offset-1">
                        <br>
                        <table class="table">
                            <h4 class="txtTailleTitreBtk colyel"><?php echo $donnees['denomination']; ?></h4>
                            <thead class="desc colyel">
                                <tr>
                                    <th scope="col">Caractéristiques</th>
                                </tr>
                            </thead>
                            <tbody class="lead desc">
                                <tr>
                                    <th scope="row">Saison</th>
                                    <td><?php echo $donnees['saison']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Description</th>
                                    <td><?php echo $donnees['descriptionProd']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Prix</th>
                                    <td><?php echo $donnees['prix']; ?></td>
                                </tr>
                                <tr class="cacher" id="cacher">
                                    <th scope="row">Quantité</th>
                                    <td><?php echo $donnees['quantite']; ?></td>
                                </tr>
                            </tbody>
                            
                            <td>
                                <div class="ButtonAR d-inline">
                                    <button class="buttonPM" id="moins" onclick="substract('<?php echo $donnees['lienImage'] . 'Quant'; ?>');">-</button>
                                </div>
                                <input type="text" class="button" name="<?php echo $donnees['lienImage'] . 'Quant'; ?>" id="<?php echo $donnees['lienImage'] . 'Quant'; ?>" readonly="true" value="0">
                                <div class="ButtonAR d-inline">
                                    <button class="buttonPM" id="plus" onclick="add('<?php echo $donnees['lienImage'] . 'Quant'; ?>');">+</button>
                                </div>
                                <td><button type="button" class="btn colyel mt-2"><a class='lien-produit' href="panier.php?action=ajout&amp;l=<?php echo $donnees['denomination']; ?>&amp;q=1&amp;p=<?php echo $donnees['prix']; ?>&amp;img=images/imgbtk/<?php echo $page; ?>/<?php echo $donnees['lienImage']; ?>.png" onclick="document.location.href='panier.php'">Ajouter au panier</a></button></td>
                            </td>
                        </table>
                    </div>
                    <hr class="mt-5">
                </div>
                <br>
                <br>

            <?php } ?>
    </section>
    <?php include('php/Footer.php'); ?>

    <script src="js/script.js"></script>
    <script src="js/general.js"></script>
</body>

</html>