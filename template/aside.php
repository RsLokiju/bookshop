<?php

// La liste des livres sous forme de tableau
include_once('inc/livres.php');
?>

<aside class="col-lg-3">
    <h1 class="my-4">Bienvenue</h1>
    <p>Aujourd'hui nous sommes le <?php echo date('d/m/Y') ?>.</p>

    <h2>TOP 3</h2>
    <div class="list-group">
        <?php
        for($i = 0; $i < 3; $i++){
            echo '<a href="item.php?id_livre='.$i.'" class="btn btn-danger list-group-item mb-1">'.$livres[$i]["titre"].' de '.$livres[$i]["auteur"].'</a>';
        };
        ?>
    </div>
</aside>