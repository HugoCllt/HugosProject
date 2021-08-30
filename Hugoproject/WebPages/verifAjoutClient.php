<?php
    session_start();
?>
<?php
    $nom = $_POST['fnom'];
    $prenom = $_POST['fprenom'];
    $email = $_POST['femail'];
    $mdp = $_POST['Password'];
    $dateN = $_POST['fdateN'];
    $adresse = $_POST['adresse'];
    $ville = $_POST['ville'];

    // chemin d'accès au fichier JSON
    $file = 'json/identifiant.json'; 
    // mettre le contenu du fichier dans une variable
    $data = file_get_contents($file); 
    // décoder le flux JSON
    $obj = json_decode($data, true); 
    // ecriture du contenu
    $ecritureFichier = array('nom' => $nom, 'prenom' => $prenom, 'email' => $email, 'mdp' => $mdp, 'dateN' => $dateN, 'adresse' => $adresse, 'ville' => $ville);
    // fusion des 2 tableau
    array_push($obj, $ecritureFichier);
    // mettre le contenu dans une variable
    $obj = json_encode($obj);
    // ajout dans le fichier JSON
    file_put_contents($file, $obj);

    //redirection vers l'accueil
    header('Location: /index.php');

    $_SESSION["nom"]=$nom;
    $_SESSION["prenom"]=$prenom;
    $_SESSION["email"]=$email;
    $_SESSION["mdp"]=$mdp;
    $_SESSION["dateN"]=$dateN;
    $_SESSION["adresse"]=$adresse;
    $_SESSION["ville"]=$ville;
?>