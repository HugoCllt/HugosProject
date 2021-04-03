<?php
  // Start the session
  session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/stylebtk.css" />
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

    <section class="container-fluid jumbotron text-center">
        
        <div class="container">
            <h1 class="jumbotron-heading txtTailleTitre primary">SurfCamp Panier</h1>
        </div>

    </section>

    <?php include('php/Footer.php'); ?>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/surf.js"></script>
    <script src="js/general.js"></script>
</body>
</html>