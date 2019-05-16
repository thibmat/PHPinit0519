<?php
//INCLUSION EN TETE + NAVBAR
require "inc/header.php";
//INCLUSION DU TRAITEMENT DU FORMULAIRE
require "handle-product-new.php";
var_dump($_SERVER);
?>
<main class="container">
<h1>Ajout d'un produit</h1>
<form method="post">
    <div class="form-group">
        <label for="name">Nom du produit</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Nom">
        <label for="desc">Description</label>
        <textarea class="form-control" id="desc" rows="3" name="desc">Description du produit</textarea>
        <label for="prix">Prix</label>
        <input type="number" step="0.01" class="form-control" id="prix" name="prix" placeholder="Prix">
    </div>
    <div class="custom-control custom-switch">
        <input type="checkbox" class="custom-control-input" data-toggle="toggle" data-style="ios" id="valid" name="valid">
        <label class="custom-control-label" for="valid">Publier cet article</label>
    </div>
    <div class="form-group">
        <label for="date">Date de création</label>
        <input type="date" class="form-control" id="date" name="date">
    </div>
    <div class="form-group">
        <label for="vues">Nombre de vues</label>
        <input type="number" class="form-control" id="vues" aria-describedby="vues" placeholder="Vues" name="vues">
    </div>

    <button type="submit" class="btn btn-primary">Créer le produit</button>
</form>
</main>
<?php
require "inc/footer.php";
?>
