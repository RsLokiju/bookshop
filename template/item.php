<?php
include_once('inc/livres.php');
$id_livre = $_GET["id_livre"];


echo '      <div class="col-lg-19 center d-flex justify-center">

        <div class="card mt-4">
          <img class="card-img-top img-fluid" src="'.$livres[$id_livre]["photo"].'" alt="">
          <div class="card-body">
            <h3 class="card-title">'.$livres[$id_livre]["titre"].'</h3>
            <h4>Prix: '.$livres[$id_livre]["prix"].' €</h4>
            <h4>De: '.$livres[$id_livre]["auteur"].' €</h4>
            <p class="card-text">'.$livres[$id_livre]["resume"].'</p>
            <span class="text-warning"> ';

            for($i=0; $i < 5; $i++) {
                if ($i <= $livres[$id_livre]["note"]) {
                    echo '&#9733;';
                } else {
                    echo '&#9734;';
    
                };
            };
            

            echo '</span> '.$livres[$id_livre]["note"].' étoiles
          </div>
        </div>
        <!-- /.card -->

        <div class="card card-outline-secondary my-4">
          <div class="card-header">
            Commentaires
          </div>
          <div class="card-body">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
            <small class="text-muted">Posté par Anonynous le 20/07/2019</small>
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
            <small class="text-muted">Posté par Anonynous le 20/07/2019</small>
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
            <small class="text-muted">Posté par Anonynous le 20/07/2019</small>
            <hr>
            <a href="#" class="btn btn-success">Laisser un commentaire</a>
          </div>
        </div>
        <!-- /.card -->

      </div>
      <!-- /.col-lg-9 -->';
?>