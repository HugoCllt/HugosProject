

<?php
$Simage = array('combiDevant','shortiDevant','cagoule','gants','chaussons');
$Snom = array("VISSLA Seven Seas Comp 4/3mm", "VISSLA Seven Seas Spring Suit 2/2mm", "OLAIAN Cagoule SURF intégrale Néoprène 2/2mm", "VISSLA Seven Seas Gants Surf 3/3mm", "VISSLA Seven Seas Chaussons 3/3mm"); 
$Ssaison = array('2021','2020','2020','2021','2021');
$Smod = array('MW43Q7FC','MW22Q7SS','MW22QOSN','MW33Q7SG','MWB3A7ST');
$Sepai = array("4/3 mm","2/2 mm","2/2 mm","3/3 mm","3/3 mm");
$Sfermeture = array("Front Zip","Front Zip","Front Zip","Front Zip","Split toe");
$Sprix = array('300€','100€','40€','60€','50€');

?>

<?php
for ($i=0; $i < sizeof($Snom); $i++) { ?>

    <div class="row">
        <!-- Image -->
        <div class="col-lg-5 mt-5 image-boutique">
            <div class="card border-0 carte" style="width: 100%;">
                <img class="card-img-top rounded-1 image-zoom" 
                id="<?php echo $Simage[$i] ;?>" 
                src="images/imgbtk/combinaison/<?php echo $Simage[$i] ;?>.png" 
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
                    <th scope="row">Modèle:</th>
                    <td><?php echo $Smod[$i] ;?></td>
                </tr>
                <tr>
                    <th scope="row">Épaisseur</th>
                    <td><?php echo $Sepai[$i] ;?></td>
                </tr>
                <tr>
                    <th scope="row">fermeture</th>
                    <td><?php echo $Sfermeture[$i] ;?></td>
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