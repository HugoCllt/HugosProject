<div class="border-top barreDeNavigation sticky-top">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid barreDeNavigationTexte ">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 txtTailleTexte">
                    <li class="nav-item">
                        <a class="nav-link <?php if ($page == 'Accueil') { echo 'active';}?>" aria-current="page" href="index.php">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($page == 'Combinaisons') { echo 'active';}?>" aria-current="page" href="produit.php?cat=Combinaisons">Combinaisons</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($page == 'Surfs') { echo 'active';}?>" href="produit.php?cat=Surfs">Surfs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($page == 'BodyBoards') { echo 'active';}?>" href="produit.php?cat=BodyBoards">BodyBoards</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($page == 'Accessoires') { echo 'active';}?>" href="produit.php?cat=Accessoires">Accessoires</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($page == 'Contact') { echo 'active';}?>" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="php/Surfcamp_data.php">data</a>
                    </li>
                </ul>

                <ul class="d-flex txtTailleTexte navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link <?php if ($page == 'Panier') { echo 'active';}?>" href="panier.php">Panier</a>
                    </li>
                    <?php 
                        if ($page !== "ajouterClient") {
                            if (isset($_SESSION["email"])) {
                                echo "<p class='nav-link'>Bonjour " . $_SESSION["prenom"] . " !</p>";
                                echo "<li class='nav-item'>
                                <a class='nav-link' href='Deconnexion.php'>Déconnexion</a>
                                </li>";
                            } else {
                                echo "<li class='nav-item'>
                                <a class='nav-link' href='connexion.php'>Connexion</a>
                                </li>";
                            }
                        }
                    ?>
                </ul>     
          </div>
        </div>
      </nav>
</div>

<br>
<br>
<br>