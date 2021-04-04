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
        if ($page == "Surfs") {
            for ($i = 0; $i < sizeof($data['categorie'][0]['Surfs']); $i++) { ?>
                <div class="row">
                    <!-- Image -->
                    <div class="col-lg-5 mt-5 image-boutique">
                        <div class="card border-0 carte" style="width: 100%;">
                            <img class="card-img-top rounded-1 image-zoom" id="<?php echo $data['categorie'][0]['Surfs'][$i]['Simage']; ?>" src="images/imgbtk/surfs/<?php echo $data['categorie'][0]['Surfs'][$i]['Simage']; ?>.png" alt="<?php echo $data['categorie'][0]['Surfs'][$i]['Simage']; ?>" onmouseover="agrandir('<?php echo $data['categorie'][0]['Surfs'][$i]['Simage']; ?>')" onmouseout="diminuer('<?php echo $data['categorie'][0]['Surfs'][$i]['Simage']; ?>')">
                        </div>
                    </div>

                    <!-- Caractéristiques -->
                    <div class="col-lg-6 my-4 offset-1">
                        <br>
                        <table class="table">
                            <h4 class="txtTailleTitreBtk colyel"><?php echo $data['categorie'][0]['Surfs'][$i]['Snom']; ?></h4>
                            <thead class="desc colyel">
                                <tr>
                                    <th scope="col">Caractéristiques</th>
                                </tr>
                            </thead>
                            <tbody class="lead desc">
                                <tr>
                                    <th scope="row">Saison</th>
                                    <td><?php echo $data['categorie'][0]['Surfs'][$i]['Ssaison']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Type de planche :</th>
                                    <td><?php echo $data['categorie'][0]['Surfs'][$i]['Stype']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Dimensions</th>
                                    <td><?php echo $data['categorie'][0]['Surfs'][$i]['Sdimen']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Description</th>
                                    <td><?php echo $data['categorie'][0]['Surfs'][$i]['Sdesc']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Prix</th>
                                    <td><?php echo $data['categorie'][0]['Surfs'][$i]['Sprix']; ?></td>
                                </tr>
                                <tr class="cacher" id="cacher">
                                    <th scope="row">Quantité</th>
                                    <td>10</td>
                                </tr>
                            </tbody>
                            
                            <td>
                                <div class="ButtonAR d-inline">
                                    <button class="buttonPM" id="moins" onclick="substract('<?php echo $data['categorie'][0]['Surfs'][$i]['Simage'] . 'Quant'; ?>');">-</button>
                                </div>
                                <input type="text" class="button" name="<?php echo $data['categorie'][0]['Surfs'][$i]['Simage'] . 'Quant'; ?>" id="<?php echo $data['categorie'][0]['Surfs'][$i]['Simage'] . 'Quant'; ?>" readonly="true" value="0">
                                <div class="ButtonAR d-inline">
                                    <button class="buttonPM" id="plus" onclick="add('<?php echo $data['categorie'][0]['Surfs'][$i]['Simage'] . 'Quant'; ?>');">+</button>
                                </div>
                                <td><button type="button" class="btn colyel mt-2"><a class='lien-produit' href="panier.php?action=ajout&amp;l=<?php echo $data['categorie'][0]['Surfs'][$i]['Snom']; ?>&amp;q=1&amp;p=<?php echo $data['categorie'][0]['Surfs'][$i]['Sprix']; ?>&amp;img=images/imgbtk/surfs/<?php echo $data['categorie'][0]['Surfs'][$i]['Simage']; ?>.png" onclick="document.location.href='panier.php'">Ajouter au panier</a></button></td>
                            
                            </td>
                        </table>
                    </div>
                    <hr class="mt-5">
                </div>
                <br>
                <br>

            <?php }
        } else if ($page == "Combinaisons") {
            for ($i = 0; $i < sizeof($data['categorie'][0]['Combinaisons']); $i++) { ?>
                <div class="row">
                    <!-- Image -->
                    <div class="col-lg-5 mt-5 image-boutique">
                        <div class="card border-0 carte" style="width: 100%;">
                            <img class="card-img-top rounded-1 image-zoom" id="<?php echo $data['categorie'][0]['Combinaisons'][$i]['Simage']; ?>" src="images/imgbtk/combinaison/<?php echo $data['categorie'][0]['Combinaisons'][$i]['Simage']; ?>.png" alt="<?php echo $data['categorie'][0]['Combinaisons'][$i]['Simage']; ?>" onmouseover="agrandir('<?php echo $data['categorie'][0]['Combinaisons'][$i]['Simage']; ?>')" onmouseout="diminuer('<?php echo $data['categorie'][0]['Combinaisons'][$i]['Simage']; ?>')">
                        </div>
                    </div>

                    <!-- Caractéristiques -->
                    <div class="col-lg-6 my-4 offset-1">
                        <br>
                        <table class="table">
                            <h4 class="txtTailleTitreBtk colyel"><?php echo $data['categorie'][0]['Combinaisons'][$i]['Snom']; ?></h4>
                            <thead class="desc colyel">
                                <tr>
                                    <th scope="col">Caractéristiques</th>
                                </tr>
                            </thead>
                            <tbody class="lead desc">
                                <tr>
                                    <th scope="row">Saison</th>
                                    <td><?php echo $data['categorie'][0]['Combinaisons'][$i]['Ssaison']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Modèle:</th>
                                    <td><?php echo $data['categorie'][0]['Combinaisons'][$i]['Smod']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Épaisseur</th>
                                    <td><?php echo $data['categorie'][0]['Combinaisons'][$i]['Sepai']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">fermeture</th>
                                    <td><?php echo $data['categorie'][0]['Combinaisons'][$i]['Sfermeture']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Prix</th>
                                    <td><?php echo $data['categorie'][0]['Combinaisons'][$i]['Sprix']; ?></td>
                                </tr>
                                <tr class="cacher" id="cacher">
                                    <th scope="row">Quantité</th>
                                    <td>10</td>
                                </tr>
                            </tbody>
                            <td>
                                <div class="ButtonAR d-inline">
                                    <button class="buttonPM" id="moins" onclick="substract('<?php echo $data['categorie'][0]['Combinaisons'][$i]['Simage'] . 'Quant'; ?>');">-</button>
                                </div>
                                <input type="text" class="button" id="<?php echo $data['categorie'][0]['Combinaisons'][$i]['Simage'] . 'Quant'; ?>" readonly="true" value="0">
                                <div class="ButtonAR d-inline">
                                    <button class="buttonPM" id="plus" onclick="add('<?php echo $data['categorie'][0]['Combinaisons'][$i]['Simage'] . 'Quant'; ?>');">+</button>
                                </div>
                                <td><button type="button" class="btn colyel mt-2"><a class='lien-produit' href="panier.php?action=ajout&amp;l=<?php echo $data['categorie'][0]['Combinaisons'][$i]['Snom']; ?>&amp;q=1&amp;p=<?php echo $data['categorie'][0]['Combinaisons'][$i]['Sprix']; ?>&amp;img=images/imgbtk/combinaison/<?php echo $data['categorie'][0]['Combinaisons'][$i]['Simage']; ?>.png" onclick="document.location.href='panier.php'">Ajouter au panier</a></button></td>
                            </td>
                        </table>
                    </div>
                    <hr class="mt-5">
                </div>
                <br>
                <br>

            <?php }
        } else if ($page == "BodyBoards") {
            for ($i = 0; $i < sizeof($data['categorie'][0]['BodyBoards'][0]['body']); $i++) { ?>
                <div class="row">
                    <!-- Image -->
                    <div class="col-lg-5 mt-5 image-boutique">
                        <div class="card border-0 carte" style="width: 100%;">
                            <img class="card-img-top rounded-1 image-zoom" id="<?php echo $data['categorie'][0]['BodyBoards'][0]['body'][$i]['Simage']; ?>" src="images/imgbtk/body/<?php echo $data['categorie'][0]['BodyBoards'][0]['body'][$i]['Simage']; ?>.png" alt="<?php echo $data['categorie'][0]['BodyBoards'][0]['body'][$i]['Simage']; ?>" onmouseover="agrandir('<?php echo $data['categorie'][0]['BodyBoards'][0]['body'][$i]['Simage']; ?>')" onmouseout="diminuer('<?php echo $data['categorie'][0]['BodyBoards'][0]['body'][$i]['Simage']; ?>')">
                        </div>
                    </div>
                    <!-- Caractéristiques -->
                    <div class="col-lg-6 my-4 offset-1">
                        <br>
                        <table class="table">
                            <h4 class="txtTailleTitreBtk colyel"><?php echo $data['categorie'][0]['BodyBoards'][0]['body'][$i]['Snom']; ?></h4>
                            <thead class="desc colyel">
                                <tr>
                                    <th scope="col">Caractéristiques</th>
                                </tr>
                            </thead>
                            <tbody class="lead desc">
                                <tr>
                                    <th scope="row">Saison</th>
                                    <td><?php echo $data['categorie'][0]['BodyBoards'][0]['body'][$i]['Ssaison']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Modèle</th>
                                    <td><?php echo $data['categorie'][0]['BodyBoards'][0]['body'][$i]['Smod']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Taille</th>
                                    <td><?php echo $data['categorie'][0]['BodyBoards'][0]['body'][$i]['Staille']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Core</th>
                                    <td><?php echo $data['categorie'][0]['BodyBoards'][0]['body'][$i]['Score']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Description</th>
                                    <td><?php echo $data['categorie'][0]['BodyBoards'][0]['body'][$i]['Sdesc']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Prix</th>
                                    <td><?php echo $data['categorie'][0]['BodyBoards'][0]['body'][$i]['Sprix']; ?></td>
                                </tr>
                                <tr class="cacher" id="cacher">
                                    <th scope="row">Quantité</th>
                                    <td>10</td>
                                </tr>
                            </tbody>
                            <td>
                                <div class="ButtonAR d-inline">
                                    <button class="buttonPM" id="moins" onclick="substract('<?php echo $data['categorie'][0]['BodyBoards'][0]['body'][$i]['Simage'] . 'Quant'; ?>');">-</button>
                                </div>
                                <input type="text" class="button" id="<?php echo $data['categorie'][0]['BodyBoards'][0]['body'][$i]['Simage'] . 'Quant'; ?>" readonly="true" value="0">
                                <div class="ButtonAR d-inline">
                                    <button class="buttonPM" id="plus" onclick="add('<?php echo $data['categorie'][0]['BodyBoards'][0]['body'][$i]['Simage'] . 'Quant'; ?>');">+</button>
                                </div>
                                <td><button type="button" class="btn colyel mt-2"><a class='lien-produit' href="panier.php?action=ajout&amp;l=<?php echo $data['categorie'][0]['BodyBoards'][0]['body'][$i]['Snom']; ?>&amp;q=1&amp;p=<?php echo $data['categorie'][0]['BodyBoards'][0]['body'][$i]['Sprix']; ?>&amp;img=images/imgbtk/body/<?php echo $data['categorie'][0]['BodyBoards'][0]['body'][$i]['Simage']; ?>.png" onclick="document.location.href='panier.php'">Ajouter au panier</a></button></td>
                            </td>
                        </table>
                    </div>
                    <hr class="mt-5">
                </div>
                <br>
                <br>
            <?php } ?>

            <?php
            for ($i = 0; $i < sizeof($data['categorie'][0]['BodyBoards'][0]['palme']); $i++) { ?>
                <div class="row">
                    <!-- Image -->
                    <div class="col-lg-5 mt-5 image-boutique">
                        <div class="card border-0 carte" style="width: 100%;">
                            <img class="card-img-top rounded-1 image-zoom" id="<?php echo $data['categorie'][0]['BodyBoards'][0]['palme'][$i]['Simage']; ?>" src="images/imgbtk/body/<?php echo $data['categorie'][0]['BodyBoards'][0]['palme'][$i]['Simage']; ?>.png" alt="<?php echo $data['categorie'][0]['BodyBoards'][0]['palme'][$i]['Simage']; ?>" onmouseover="agrandir('<?php echo $data['categorie'][0]['BodyBoards'][0]['palme'][$i]['Simage']; ?>')" onmouseout="diminuer('<?php echo $data['categorie'][0]['BodyBoards'][0]['palme'][$i]['Simage']; ?>')">
                        </div>
                    </div>
                    <!-- Caractéristiques -->
                    <div class="col-lg-6 my-4 offset-1">
                        <br>
                        <table class="table">
                            <h4 class="txtTailleTitreBtk colyel"><?php echo $data['categorie'][0]['BodyBoards'][0]['palme'][$i]['Snom']; ?></h4>
                            <thead class="desc colyel">
                                <tr>
                                    <th scope="col">Caractéristiques</th>
                                </tr>
                            </thead>
                            <tbody class="lead desc">
                                <tr>
                                    <th scope="row">Saison</th>
                                    <td><?php echo $data['categorie'][0]['BodyBoards'][0]['palme'][$i]['Ssaison']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Modèle</th>
                                    <td><?php echo $data['categorie'][0]['BodyBoards'][0]['palme'][$i]['Smod']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Poids</th>
                                    <td><?php echo $data['categorie'][0]['BodyBoards'][0]['palme'][$i]['Spoids']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Description</th>
                                    <td><?php echo $data['categorie'][0]['BodyBoards'][0]['palme'][$i]['Sdesc']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Prix</th>
                                    <td><?php echo $data['categorie'][0]['BodyBoards'][0]['palme'][$i]['Sprix']; ?></td>
                                </tr>
                                <tr class="cacher" id="cacher">
                                    <th scope="row">Quantité</th>
                                    <td>10</td>
                                </tr>
                            </tbody>
                            <td>
                                <div class="ButtonAR d-inline">
                                    <button class="buttonPM" id="moins" onclick="substract('<?php echo $data['categorie'][0]['BodyBoards'][0]['palme'][$i]['Simage'] . 'Quant'; ?>');">-</button>
                                </div>
                                <input type="text" class="button" id="<?php echo $data['categorie'][0]['BodyBoards'][0]['palme'][$i]['Simage'] . 'Quant'; ?>" readonly="true" value="0">
                                <div class="ButtonAR d-inline">
                                    <button class="buttonPM" id="plus" onclick="add('<?php echo $data['categorie'][0]['BodyBoards'][0]['palme'][$i]['Simage'] . 'Quant'; ?>');">+</button>
                                </div>
                                <td><button type="button" class="btn colyel mt-2"><a class='lien-produit' href="panier.php?action=ajout&amp;l=<?php echo $data['categorie'][0]['BodyBoards'][0]['palme'][$i]['Snom']; ?>&amp;q=1&amp;p=<?php echo $data['categorie'][0]['BodyBoards'][0]['palme'][$i]['Sprix']; ?>&amp;img=images/imgbtk/body/<?php echo $data['categorie'][0]['BodyBoards'][0]['palme'][$i]['Simage']; ?>.png" onclick="document.location.href='panier.php'">Ajouter au panier</a></button></td>
                            </td>
                        </table>
                    </div>
                    <hr class="mt-5">
                </div>
                <br>
                <br>

            <?php }
        } else if ($page == "Accessoires") {
            for ($i = 0; $i < sizeof($data['categorie'][0]['Accessoires'][0]['Accessoires1']); $i++) { ?>
                <div class="row">
                    <!-- Image -->
                    <div class="col-lg-5 mt-5 image-boutique">
                        <div class="card border-0 carte" style="width: 100%;">
                            <img class="card-img-top rounded-1 image-zoom" id="<?php echo $data['categorie'][0]['Accessoires'][0]['Accessoires1'][$i]['Simage']; ?>" src="images/imgbtk/accessoires/<?php echo $data['categorie'][0]['Accessoires'][0]['Accessoires1'][$i]['Simage']; ?>.png" alt="<?php echo $data['categorie'][0]['Accessoires'][0]['Accessoires1'][$i]['Simage']; ?>" onmouseover="agrandir('<?php echo $data['categorie'][0]['Accessoires'][0]['Accessoires1'][$i]['Simage']; ?>')" onmouseout="diminuer('<?php echo $data['categorie'][0]['Accessoires'][0]['Accessoires1'][$i]['Simage']; ?>')">
                        </div>
                    </div>
                    <!-- Caractéristiques -->
                    <div class="col-lg-6 my-4 offset-1">
                        <br>
                        <table class="table">
                            <h4 class="txtTailleTitreBtk colyel"><?php echo $data['categorie'][0]['Accessoires'][0]['Accessoires1'][$i]['Snom']; ?></h4>
                            <thead class="desc colyel">
                                <tr>
                                    <th scope="col">Caractéristiques</th>
                                </tr>
                            </thead>
                            <tbody class="lead desc">
                                <tr>
                                    <th scope="row">Saison</th>
                                    <td><?php echo $data['categorie'][0]['Accessoires'][0]['Accessoires1'][$i]['Ssaison']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Modèle</th>
                                    <td><?php echo $data['categorie'][0]['Accessoires'][0]['Accessoires1'][$i]['Smod']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Taille</th>
                                    <td><?php echo $data['categorie'][0]['Accessoires'][0]['Accessoires1'][$i]['Staille']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Description</th>
                                    <td><?php echo $data['categorie'][0]['Accessoires'][0]['Accessoires1'][$i]['Sdesc']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Prix</th>
                                    <td><?php echo $data['categorie'][0]['Accessoires'][0]['Accessoires1'][$i]['Sprix']; ?></td>
                                </tr>
                                <tr class="cacher" id="cacher">
                                    <th scope="row">Quantité</th>
                                    <td>10</td>
                                </tr>
                            </tbody>
                            <td>
                                <div class="ButtonAR d-inline">
                                    <button class="buttonPM" id="moins" onclick="substract('<?php echo $data['categorie'][0]['Accessoires'][0]['Accessoires1'][$i]['Simage'] . 'Quant'; ?>');">-</button>
                                </div>
                                <input type="text" class="button" id="<?php echo $data['categorie'][0]['Accessoires'][0]['Accessoires1'][$i]['Simage'] . 'Quant'; ?>" readonly="true" value="0">
                                <div class="ButtonAR d-inline">
                                    <button class="buttonPM" id="plus" onclick="add('<?php echo $data['categorie'][0]['Accessoires'][0]['Accessoires1'][$i]['Simage'] . 'Quant'; ?>');">+</button>
                                </div>
                                <td><button type="button" class="btn colyel mt-2"><a class='lien-produit' href="panier.php?action=ajout&amp;l=<?php echo $data['categorie'][0]['Accessoires'][0]['Accessoires1'][$i]['Snom']; ?>&amp;q=1&amp;p=<?php echo $data['categorie'][0]['Accessoires'][0]['Accessoires1'][$i]['Sprix']; ?>&amp;img=images/imgbtk/accessoires/<?php echo $data['categorie'][0]['Accessoires'][0]['Accessoires1'][$i]['Simage']; ?>.png" onclick="document.location.href='panier.php'">Ajouter au panier</a></button></td>
                            </td>
                        </table>
                    </div>
                    <hr class="mt-5">
                </div>
                <br>
                <br>

            <?php } ?>

            <?php
            for ($i = 0; $i < sizeof($data['categorie'][0]['Accessoires'][0]['Accessoires2']); $i++) { ?>

                <div class="row">
                    <!-- Image -->
                    <div class="col-lg-5 mt-5 image-boutique">
                        <div class="card border-0 carte" style="width: 100%;">
                            <img class="card-img-top rounded-1 image-zoom" id="<?php echo $data['categorie'][0]['Accessoires'][0]['Accessoires2'][$i]['Simage']; ?>" src="images/imgbtk/accessoires/<?php echo $data['categorie'][0]['Accessoires'][0]['Accessoires2'][$i]['Simage']; ?>.png" alt="<?php echo $data['categorie'][0]['Accessoires'][0]['Accessoires2'][$i]['Simage']; ?>" onmouseover="agrandir('<?php echo $data['categorie'][0]['Accessoires'][0]['Accessoires2'][$i]['Simage']; ?>')" onmouseout="diminuer('<?php echo $data['categorie'][0]['Accessoires'][0]['Accessoires2'][$i]['Simage']; ?>')">
                        </div>
                    </div>
                    <!-- Caractéristiques -->
                    <div class="col-lg-6 my-4 offset-1">
                        <br>
                        <table class="table">
                            <h4 class="txtTailleTitreBtk colyel"><?php echo $data['categorie'][0]['Accessoires'][0]['Accessoires2'][$i]['Snom']; ?></h4>
                            <thead class="desc colyel">
                                <tr>
                                    <th scope="col">Caractéristiques</th>
                                </tr>
                            </thead>
                            <tbody class="lead desc">
                                <tr>
                                    <th scope="row">Saison</th>
                                    <td><?php echo $data['categorie'][0]['Accessoires'][0]['Accessoires2'][$i]['Ssaison']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Modèle</th>
                                    <td><?php echo $data['categorie'][0]['Accessoires'][0]['Accessoires2'][$i]['Smod']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Poids</th>
                                    <td><?php echo $data['categorie'][0]['Accessoires'][0]['Accessoires2'][$i]['Spoids']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Description</th>
                                    <td><?php echo $data['categorie'][0]['Accessoires'][0]['Accessoires2'][$i]['Sdesc']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Prix</th>
                                    <td><?php echo $data['categorie'][0]['Accessoires'][0]['Accessoires2'][$i]['Sprix']; ?></td>
                                </tr>
                                <tr class="cacher" id="cacher">
                                    <th scope="row">Quantité</th>
                                    <td>10</td>
                                </tr>
                            </tbody>
                            <td>
                                <div class="ButtonAR d-inline">
                                    <button class="buttonPM" id="moins" onclick="substract('<?php echo $data['categorie'][0]['Accessoires'][0]['Accessoires2'][$i]['Simage'] . 'Quant'; ?>');">-</button>
                                </div>
                                <input type="text" class="button" id="<?php echo $data['categorie'][0]['Accessoires'][0]['Accessoires2'][$i]['Simage'] . 'Quant'; ?>" readonly="true" value="0">
                                <div class="ButtonAR d-inline">
                                    <button class="buttonPM" id="plus" onclick="add('<?php echo $data['categorie'][0]['Accessoires'][0]['Accessoires2'][$i]['Simage'] . 'Quant'; ?>');">+</button>
                                </div>
                                <td><button type="button" class="btn colyel mt-2"><a class='lien-produit' href="panier.php?action=ajout&amp;l=<?php echo $data['categorie'][0]['Accessoires'][0]['Accessoires2'][$i]['Snom']; ?>&amp;q=1&amp;p=<?php echo $data['categorie'][0]['Accessoires'][0]['Accessoires2'][$i]['Sprix']; ?>&amp;img=images/imgbtk/accessoires/<?php echo $data['categorie'][0]['Accessoires'][0]['Accessoires2'][$i]['Simage']; ?>.png" onclick="document.location.href='panier.php'">Ajouter au panier</a></button></td>
                            </td>
                        </table>
                    </div>
                    <hr class="mt-5">
                </div>
                <br>
                <br>
        <?php }
        } ?>

    </section>

    <?php include('php/Footer.php'); ?>

    <script src="js/script.js"></script>
    <script src="js/general.js"></script>
</body>

</html>