<header>
<?php

/**
 * On chercher le nom du fichier PHP exécuté pour sélectionner la classe active dans le menu
 */
$file = $_SERVER["PHP_SELF"];
$tableau_file = explode( "/", $file );

//Le dernier élément contient "index.php" ou "login.php" ou "contact.php", ect....
$actual_script = end( $tableau_file );



?>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">Bookshop</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item <?php if($actual_script == 'index.php') {echo 'active';}?>">
                        <a class="nav-link" href="index.php">Home
                        <?php if($actual_script == 'index.php') {echo '<span class="sr-only">(current)</span>';}?>
                            
                        </a>
                    </li>
                    <li class="nav-item <?php if($actual_script == 'login.php') {echo 'active';}?>">
                        <a class="nav-link" href="login.php">Vous connecter</a>
                        <?php if($actual_script == 'index.php') {echo '<span class="sr-only">(current)</span>';}?>
                    </li>
                    <li class="nav-item <?php if($actual_script == 'contact.php') {echo 'active';}?>">
                        <a class="nav-link" href="contact.php">Nous contacter</a>
                        <?php if($actual_script == 'index.php') {echo '<span class="sr-only">(current)</span>';}?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>