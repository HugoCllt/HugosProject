<?php
$Simage1 = array('bodyb1', 'bodyb2', 'bodyb3');
$Simage2 = array('palmes', 'palmes2');
//Produit 1
$SnomP1 = array("HUBBOARDS HOUSTON NRG+", "SNIPER JAB - AMAURY PRO SERIES NRG", "NMD BEN PLAYER QUANTUM WIFLY V2 PP");
$SsaisonP1 = array('2021', '2020', '2021');
$SmodP1 = array('Houston NRG+', 'JAB - AMAURY PRO SERIES NRG', 'Ben Player Quantum Wifly V2 PP');
$StailleP1 = array('41.5', '42', '42.5');
$ScoreP1 = array('NRG+ - PE', 'NRG+ - PE', 'PP - PP');

$Desc1 = "Une board performance et très polyvalente grâce à son NRG Core qui offre une large plage d'utilisation tant en terme de conditions que de températures d'eaux.";
$Desc2 = "Une board de tous les jours avec un shape polyvalent. Un Body confortable pour scorer dans toutes les conditions, y compris dans les petites vagues. Assez rond sur l'avant pour partir tôt et avoir une maximum de réactivité.";
$Desc3 = 'Une board rigide avec un noyau PP combiné au quad concave pour un maximum de vitesse dans les vagues creuses et rapide avec du contrôle dans les turns serrés ou les manoeuvres sur la lèvre.';
$Desc4 = 'Les meilleures palmes combinant rigidité, manoeuvrabilité et légèreté. Parfaite pour des grosses conditions.';
$Desc5 = 'Les meilleures palmes autant pour les débutant que pour les plus expérimenté. Parfaite pour des conditions moyennes.';

$SdescP1 = array($Desc1, $Desc2, $Desc3);
$SprixP1 = array('309€', '230€', '409€');



//Produit 2

$SnomP2 = array("Dafin Palmes Pro Model Original Red Yellow", "Churchill Makapuu Palmes de bodyboard Epic 4");
$SsaisonP2 = array('2020', '2020');
$SmodP2 = array('Pro Model Original', 'EPIC 4');
$SpoidsP2 = array("480g", "560g");
$SdescP2 = array($Desc4, $Desc5);
$SprixP2 = array('90€', '70€');
?>

<?php
for ($i = 0; $i < sizeof($SnomP1); $i++) { ?>

    <div class="row">
        <!-- Image -->
        <div class="col-lg-5 mt-5 image-boutique">
            <div class="card border-0 carte" style="width: 100%;">
                <img class="card-img-top rounded-1 image-zoom" 
                id="<?php echo $Simage1[$i]; ?>" 
                src="images/imgbtk/body/<?php echo $Simage1[$i]; ?>.png" 
                alt="<?php echo $Simage1[$i]; ?>" 
                onmouseover="agrandir('<?php echo $Simage1[$i]; ?>')" 
                onmouseout="diminuer('<?php echo $Simage1[$i]; ?>')">
            </div>
        </div>
        <!-- Caractéristiques -->
        <div class="col-lg-6 my-4 offset-1">
            <br>
            <table class="table">
                <h4 class="txtTailleTitreBtk colyel"><?php echo $SnomP1[$i]; ?></h4>
                <thead class="desc colyel">
                    <tr>
                        <th scope="col">Caractéristiques</th>
                    </tr>
                </thead>
                <tbody class="lead desc">
                    <tr>
                        <th scope="row">Saison</th>
                        <td><?php echo $SsaisonP1[$i]; ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Modèle</th>
                        <td><?php echo $SmodP1[$i]; ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Taille</th>
                        <td><?php echo $StailleP1[$i]; ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Core</th>
                        <td><?php echo $ScoreP1[$i]; ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Description</th>
                        <td><?php echo $SdescP1[$i]; ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Prix</th>
                        <td><?php echo $SprixP1[$i]; ?></td>
                    </tr>
                    <tr class="cacher" id="cacher">
                        <th scope="row">Quantité</th>
                        <td>10</td>
                    </tr>
                </tbody>
                <td>
                    <div class="ButtonAR d-inline">
                        <button class="buttonPM" id="moins" onclick="substract('<?php echo $Simage1[$i] . 'Quant'; ?>');">-</button>
                    </div>
                    <input type="text" class="button" id="<?php echo $Simage1[$i] . 'Quant'; ?>" readonly="true" value="0">
                    <div class="ButtonAR d-inline">
                        <button class="buttonPM" id="plus" onclick="add('<?php echo $Simage1[$i] . 'Quant'; ?>');">+</button>
                    </div>
                <td><button type="button" class="btn colyel mt-2">Ajouter au panier</button></td>
                </td>
            </table>
        </div>
        <hr class="mt-5">
    </div>
    <br>
    <br>
<?php } ?>

<?php
for ($i = 0; $i < sizeof($SnomP2); $i++) { ?>

    <div class="row">
        <!-- Image -->
        <div class="col-lg-5 mt-5 image-boutique">
            <div class="card border-0 carte" style="width: 100%;">
                <img class="card-img-top rounded-1 image-zoom" id="<?php echo $Simage2[$i]; ?>" src="images/imgbtk/body/<?php echo $Simage2[$i]; ?>.png" alt="<?php echo $Simage2[$i]; ?>" onmouseover="agrandir('<?php echo $Simage2[$i]; ?>')" onmouseout="diminuer('<?php echo $Simage2[$i]; ?>')">
            </div>
        </div>
        <!-- Caractéristiques -->
        <div class="col-lg-6 my-4 offset-1">
            <br>
            <table class="table">
                <h4 class="txtTailleTitreBtk colyel"><?php echo $SnomP2[$i]; ?></h4>
                <thead class="desc colyel">
                    <tr>
                        <th scope="col">Caractéristiques</th>
                    </tr>
                </thead>
                <tbody class="lead desc">
                    <tr>
                        <th scope="row">Saison</th>
                        <td><?php echo $SsaisonP2[$i]; ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Modèle</th>
                        <td><?php echo $SmodP2[$i]; ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Poids</th>
                        <td><?php echo $SpoidsP2[$i]; ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Description</th>
                        <td><?php echo $SdescP2[$i]; ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Prix</th>
                        <td><?php echo $SprixP2[$i]; ?></td>
                    </tr>
                    <tr class="cacher" id="cacher">
                        <th scope="row">Quantité</th>
                        <td>10</td>
                    </tr>
                </tbody>
                <td>
                    <div class="ButtonAR d-inline">
                        <button class="buttonPM" id="moins" onclick="substract('<?php echo $Simage2[$i] . 'Quant'; ?>');">-</button>
                    </div>
                    <input type="text" class="button" id="<?php echo $Simage2[$i] . 'Quant'; ?>" readonly="true" value="0">
                    <div class="ButtonAR d-inline">
                        <button class="buttonPM" id="plus" onclick="add('<?php echo $Simage2[$i] . 'Quant'; ?>');">+</button>
                    </div>
                <td><button type="button" class="btn colyel mt-2">Ajouter au panier</button></td>
                </td>
            </table>
        </div>
        <hr class="mt-5">
    </div>
    <br>
    <br>

<?php } ?>