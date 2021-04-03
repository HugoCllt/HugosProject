<?php 
    // Start the session
    session_start();
    $page = htmlspecialchars($_GET['cat']);

    $data = json_decode(file_get_contents("json/produit.json"), true);

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

        <div class="col-12 text-center">
            <button type="button" id="bouton" class="btn colyel my-4">Afficher Stock</button>
        </div>


        <?php

        echo $data["categorie"][0]["combinaison"][0]["Simage"] ;



        if ($page == "Surfs") {
            include("php/ProdSurfs.php");

        } else if ($page == "Combinaisons") {
            include("php/ProdCombi.php");
        } else if ($page == "BodyBoards") {
            include("php/ProdBody.php");
        } else if ($page == "Accessoires") {
            include('php/ProdAcc.php');
        }

        ?>



    </section>

    <?php include('php/Footer.php'); ?>

    <script src="js/surf.js"></script>
    <script src="js/general.js"></script>
</body>

</html>