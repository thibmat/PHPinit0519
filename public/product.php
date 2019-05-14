<?php
require "inc/header.php";
?>
<main class="container">
<h1>Ajout d'un produit</h1>
<form>
    <div class="form-group">
        <label for="name">Nom du produit</label>
        <input type="text" class="form-control" required="required" id="name" name="name" aria-describedby="emailHelp" placeholder="Nom">
        <label for="desc">Description</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="desc">Description du produit</textarea>
        <label for="price">Prix</label>
        <input type="number" step="0.01" class="form-control" id="price" name="prix" aria-describedby="prix" placeholder="Prix">
    </div>
    <div class="custom-control custom-switch">
        <input type="checkbox" class="custom-control-input" checked data-toggle="toggle" data-style="ios" id="valid" name="valid">
        <label class="custom-control-label" for="valid">Publier cet article</label>
    </div>
    <div class="form-group">
        <label for="date">Date de création</label>
        <input type="date" class="form-control" id="date" name="date">
    </div>
    <div class="form-group">
        <label for="vues">Prix</label>
        <input type="number" class="form-control" id="vues" aria-describedby="vues" placeholder="Vues">
    </div>

    <button type="submit" class="btn btn-primary">Créer le produit</button>
</form>





</main>
<?php
require "inc/footer.php";
?>
