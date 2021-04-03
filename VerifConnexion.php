<?php
    session_start();
?>
<?php
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];
    $travail=-1;

    // chemin d'accès au fichier JSON
    $file = 'json/identifiant.json'; 
    // mettre le contenu du fichier dans une variable
    $data = file_get_contents($file); 
    // décoder le flux JSON
    $obj = json_decode($data, true); 
    // accede aux éléments
    foreach ($obj as $content) {
        //echo($content['email']);
        // verifie les valeur saisi par l'utilisateur
        if ($content["email"] === $email && $content["mdp"] === $mdp) {
            $nom = $content["nom"];
            $prenom = $content["prenom"];
            $dateN = $content["dateN"];
            $adresse = $content["adresse"];
            $ville = $content["ville"];
            $travail = 1;
        }
    }

    //redirection vers d'autre page en fonction du profil
    if ($travail > 0) {
        header('Location: /index.php');
    } else {
        header('Location: /connexion.php');
    }

    $_SESSION["nom"]=$nom;
    $_SESSION["prenom"]=$prenom;
    $_SESSION["email"]=$email;
    $_SESSION["mdp"]=$mdp;
    $_SESSION["dateN"]=$dateN;
    $_SESSION["adresse"]=$adresse;
    $_SESSION["ville"]=$ville;
    $_SESSION["travail"]=$travail;
?>