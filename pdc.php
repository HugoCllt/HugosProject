<?php
  // Start the session
  session_start();
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/stylebtk.css" />
    <link rel="stylesheet" href="../css/contact.css" />
    <title>SurfCamp - plan du site</title>
  </head>
  <body>
  <?php
    //header
    include('php/header.php');

    //navbar
    $page = 'pdc';
    include('php/navbar.php'); 
    
    ?>

    <section class="container">
      <p class="fs-1 text-center colyel ">Plan du site</p>
      <hr class="mb-5">
      
      <table class="table">
        <thead class="desc colyel">
            <tr>
              <th scope="col">Pages</th>
            </tr>
          </thead>
        <tbody class="lead desc">
          <tr>
            <td> <a href="../index.html">Accueil</a> </td>
          </tr>
          <tr>
            <td> <a href="Boutique/combinaisons.html">Combinaisons</a> </td>
          </tr>
          <tr>
            <td> <a href="Boutique/Surfs.html">Surfs</a> </td>
          </tr>
          <tr>
            <td> <a href="Boutique/BodyBoards.html">BodyBoards</a></td>
          </tr>
          <tr>
            <td> <a href="Boutique/Accessoires.html">Accessoires</a> </td>
          </tr>
        </tbody>
      </table>

    </section>



    <?php include('php/Footer.php'); ?>

  </body>
</html>
