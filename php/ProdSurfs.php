

<?php
$Simage = array('Surf1','Surf2','Surf3','Surf4','Surf5');
$Snom = array("TORQ TEC M2-S 7' 4 - 49L", "ESP NUMERO13 5' 11 - 30L", "CORE BAT BOARD 5' 6 - 24L", "Nomads DANCE FLOOR 9' 1 - 67L", "ROXY TROPICOCO 9' 1 - 68L"); 
$Ssaison = array('2021','2020','2021','2020','2021');
$Stype = array('Mini malibu','Shortboard','Shortboard','Longboard','Longboard');
$Sdimen = array("7' 4 x 21' 3/4' x 2' 7/8' 49 L","5' 11 x 19' 3/8' x 2' 1/2' 30 L","5' 6 x 18' 1/2' x 2' 5/16' 24 L","9' 1 x 22' 1/4' x 3' 0 67 L","9' 1 x 22' 3/4' x 2' 7/8' 68 L");

$Desc1 = 'Mini malibu confortable à la rame et performant. Une planche parfaite pour surfer dans les petites et moyennes vagues.';
$Desc2 = 'Le modèle perf de la marque E.S.P Surfboard. Vive par son nose, elle sera pour un surf rapide et manœuvrant.';
$Desc3 = 'Une planche pour tous les types de conditions et de niveaux de surf, avec un large éventail de vagues, de 1 à 8 pieds.';
$Desc4 = 'Très confortable et stable, le modèle Dance Floor est tout simplement fait pour danser, idéal pour le stepping.';
$Desc5 = 'Ce longboard hyper stylé est parfait pour les petites à moyennes conditions pour les filles qui veulent cruiser avec style et prendre un maximum de vagues.';


$Sdesc = array($Desc1, $Desc2, $Desc3, $Desc4, $Desc5);
$Sprix = array('685€','420€','485€','950€','799€');


?>

<?php

for ($i=0; $i < sizeof($Snom); $i++) { ?>
    <div class="row">
        <!-- Image -->
        <div class="col-lg-5 mt-5 image-boutique">
            <div class="card border-0 carte" style="width: 100%;">
                <img class="card-img-top rounded-1 image-zoom" 
                id="<?php echo $Simage[$i] ;?>" 
                src="images/imgbtk/surfs/<?php echo $Simage[$i] ;?>.png" 
                alt="<?php echo $Simage[$i] ;?>" 
                onmouseover="agrandir('<?php echo $Simage[$i] ;?>')" 
                onmouseout="diminuer('<?php echo $Simage[$i] ;?>')">
            </div>
        </div>

        <!-- Caractéristiques -->
        <div class="col-lg-6 my-4 offset-1">
            <br>             
            <table class="table">
                <h4 class="txtTailleTitreBtk colyel"><?php echo $Snom[$i] ;?></h4>
                <thead class="desc colyel">
                    <tr>
                    <th scope="col">Caractéristiques</th>
                    </tr>
                </thead>
                <tbody class="lead desc">
                <tr>
                    <th scope="row">Saison</th>
                    <td><?php echo $Ssaison[$i] ;?></td>
                </tr>
                <tr>
                    <th scope="row">Type de planche :</th>
                    <td><?php echo $Stype[$i] ;?></td>
                </tr>
                <tr>
                    <th scope="row">Dimensions</th>
                    <td><?php echo $Sdimen[$i] ;?></td>
                </tr>
                <tr>
                    <th scope="row">Description</th>
                    <td><?php echo $Sdesc[$i] ;?></td>
                </tr>
                <tr>
                    <th scope="row">Prix</th>
                    <td><?php echo $Sprix[$i] ;?></td>
                </tr>
                <tr class="cacher" id="cacher">
                    <th scope="row">Quantité</th>
                    <td>10</td>
                    </tr>
                    </tbody>
                    <td>
                        <div class="ButtonAR d-inline">
                            <button class="buttonPM" id="moins" onclick="substract('<?php echo $Simage[$i] . 'Quant' ;?>');">-</button>
                        </div>
                        <input type="text" class="button" id="<?php echo $Simage[$i] . 'Quant' ;?>" readonly="true" value="0">
                        <div class="ButtonAR d-inline">
                            <button class="buttonPM" id="plus" onclick="add('<?php echo $Simage[$i] . 'Quant' ;?>');">+</button>
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