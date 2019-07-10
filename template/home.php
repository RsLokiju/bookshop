<?php

// La liste des livres sous forme de tableau
include_once('inc/livres.php');

?>
<div class="col-lg-9">
    <div class="row my-4">
        
<?php
    foreach ($livres as $key => $livre) {
        # on affiche les cards pour chaque livre..
        echo '<div class="col-lg-4 col-md-6 mb-4 zoom">
                    <div class="card h-100 card-shadow">
                <a href="item.php?id_livre='.$key.'"><img class="card-img-top" src="'.$livre["photo"].'" alt=""></a>
                <div class="card-body">
                    <h4 class="card-title">
                    <a href="item.php?id_livre='.$key.'">'.$livre["titre"].'</a>
                    </h4>
                    <h5>Prix: '.$livre["prix"].' €</h5>
                    <h6>De: '.$livre["auteur"].'</h6>
                    <p class="card-text">'.$livre["resume"].'</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">';

        for($i=0; $i < 6; $i++) {
            if ($i <= $livre["note"]) {
                echo '&#9733';
            } else {
                echo '&#9734';

            };
        };

        echo '
                    </small>
                </div>
                </div>
                </div>';
    }


?>
        
    </div>
</div>
