<?php
$Simage1 = array('leashSurf', 'leashBody', 'pad');
$Simage2 = array('derive', 'wax');
//Produit 1
$SnomP1 = array("Ocean And Earth 7Ft Regular Moulded Surf Leash", "Ocean & Earth Leash Bodyboard Bicep Blue", "FCS Pad de surf Julian Wilson");
$SsaisonP1 = array('2021', '2020', '2021');
$SmodP1 = array('Diamond Flex Regular', 'Bicep One Bodyboard', 'Julian Wilson');
$StailleP1 = array('2.1m', '1.2m', '330 x 300mm');

$Desc1 = "Envie d'obtenir des vagues solides? Conçu pour supporter une houle jusqu'à 3m, vous serez en mesure de vous éblouir sans soucis dans le monde de la glisse grâce à ce leash.";
$Desc2 = "Envie d'obtenir des vagues solides? Conçu pour supporter une houle jusqu'à 3m, vous serez en mesure de vous éblouir sans soucis dans le monde de la glisse grâce à ce leash.";
$Desc3 = "Julian Wilson voulait un grip avec le maximum d'accroche mais un poids minimum. FCS lui a obtenu en utilisant une base plus fine et en perforant le grip.";
$Desc4 = "C'est un ensemble idéal pour les surfers qui recherchent un aileron fiable et polyvalent alliant vitesse, maniabilité et fluidité entre les virages.";
$Desc5 = 'Wax facile à appliquer, parfaite pour les conditions tempérées et une eau allant de 15 à 22 degrés.';

$SdescP1 = array($Desc1, $Desc2, $Desc3);
$SprixP1 = array('55€', '29€', '45€');



//Produit 2

$SnomP2 = array("DERIVES FCS II PERFORMER PC TEAL/NOIR", "SEX WAX MR.ZOGS ORIGINAL");
$SsaisonP2 = array('2021', '2021');
$SmodP2 = array('FCS II PERFORMER', 'MR.ZOGS ORIGINAL');
$SpoidsP2 = array("65 à 80 kg", "75g");
$SdescP2 = array($Desc4, $Desc5);
$SprixP2 = array('109€', '70€');
?>

<?php
for ($i = 0; $i < sizeof($SnomP1); $i++) { ?>

    <div class="row">
        <!-- Image -->
        <div class="col-lg-5 mt-5 image-boutique">
            <div class="card border-0 carte" style="width: 100%;">
                <img class="card-img-top rounded-1 image-zoom" id="<?php echo $Simage1[$i]; ?>" src="images/imgbtk/accessoires/<?php echo $Simage1[$i]; ?>.png" alt="<?php echo $Simage1[$i]; ?>" onmouseover="agrandir('<?php echo $Simage1[$i]; ?>')" onmouseout="diminuer('<?php echo $Simage1   [$i]; ?>')">
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
                <img class="card-img-top rounded-1 image-zoom" id="<?php echo $Simage2[$i]; ?>" src="images/imgbtk/accessoires/<?php echo $Simage2[$i]; ?>.png" alt="<?php echo $Simage2[$i]; ?>" onmouseover="agrandir('<?php echo $Simage2[$i]; ?>')" onmouseout="diminuer('<?php echo $Simage2[$i]; ?>')">
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