<?php
session_start();
$data = json_decode(file_get_contents("../json/produit.json"), true);



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "SurfCamp2";
try
{
	$bdd = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
    die("Erreur de connexion :".$e->getMessage());
}

// ##############################Ajout catégories######################################
//cardinalite de la bdd json
$card_categorie = sizeof($data['categorie'][0]);
// cardinalite bdd 
$card_bdd_categorie = $bdd->query('SELECT COUNT(titre) AS totalCat FROM categorie');
$repCard = $card_bdd_categorie->fetch();
//Si card !=
if ($card_categorie != $repCard['totalCat']) {

    for ($i = 0; $i < $card_categorie; $i++) {
        //accès au nom des catégories
        $nomCat = (array_keys($data['categorie'][0]));
        //Test pour savoir si la categorie existe déja ou pas : 0 non ; >0 Oui
        $sql_count_test = $bdd->prepare('SELECT COUNT(titre) AS total FROM categorie WHERE titre LIKE ?');
        $sql_count_test->execute(array($nomCat[$i]));
        $rep = $sql_count_test->fetch();
        //Dans le cas ou la catégorie n'est pas déja enregistré dans la bdd
        if ($rep['total'] == 0) {
            $req = $bdd->prepare('INSERT INTO categorie (idCategorie,titre) VALUES (?, ?)');
            $req->execute(array($i,$nomCat[$i]));
            echo $nomCat[$i] . " a été ajouté à la base de données </br>";
        }
    }
}

// ##############################FIN Ajout catégories######################################



// ##############################Ajout Produits######################################

//recuperation des noms des catégories dans le json
$nomCat = (array_keys($data['categorie'][0]));
//boucle du nombre de catégories
for ($i = 0; $i < sizeof(array_keys($data['categorie'][0])); $i++) {
    for ($j = 0; $j < sizeof($data['categorie'][0][$nomCat[$i]]); $j++) { 
        //lienImage est le test pour savoir si il existe déja dans la bdd
        $lienImage = $data['categorie'][0][$nomCat[$i]][$j]['Simage'];
        //Test pour savoir si le produit existe déja ou pas : 0 non ; >0 Oui
        $sql_count_testProduit = $bdd->prepare('SELECT COUNT(lienImage) AS totalProd FROM produit WHERE lienImage LIKE ?');
        $sql_count_testProduit->execute(array($lienImage));
        $repProduit = $sql_count_testProduit->fetch();

        if ($repProduit['totalProd'] == 0) {
            $denomination = $data['categorie'][0][$nomCat[$i]][$j]['Snom'];
            $saison = $data['categorie'][0][$nomCat[$i]][$j]['Ssaison'];
            $descriptionProd = $data['categorie'][0][$nomCat[$i]][$j]['Sdesc'];
            $prix = $data['categorie'][0][$nomCat[$i]][$j]['Sprix'];
            $quantite = $data['categorie'][0][$nomCat[$i]][$j]['Squantite'];
            $idCategorie = $i;
            //Dans le cas ou le produit n'est pas déja enregistré dans la bdd
            $req = $bdd->prepare('INSERT INTO produit (idProduit,lienImage,denomination,saison,descriptionProd,prix,quantite,idCategorie) VALUES (null, ?,?,?,?,?,?,?)');
            $req->execute(array($lienImage,$denomination,$saison,$descriptionProd,$prix,$quantite,$idCategorie));
            echo $lienImage . " a été ajouté à la base de données </br>";
        }
    }
}

// ##############################FIN Ajout Produits######################################

?>