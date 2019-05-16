<?php
session_start();
//INCLUSION EN TETE + NAVBAR
require "inc/header.php";
//INCLUSION DU TRAITEMENT DU FORMULAIRE
require "function_jeu.php";
require "verifjeu.php";
var_dump($_SESSION["resultat"]);
$essais = 26 - $_SESSION['n'];
?>
<main class="container w-25">
<h1>Jeu de la lettre</h1>
<form method="post" >
    <div class="form-group row">
        <label for="lettre" >Merci de rentrer une lettre a tester : </label>
        <input type="text" class="form-control" id="name" name="name" >
    </div>
    <div class="form-group text-center">
        <button type="submit" class="btn btn-primary">Tester !</button>
        <section>
            <p style="margin:auto;margin:50px;text-align:center;color:khaki;font-size:20px;background:darkgrey;border-radius:20px;">
                <?php echo "Il vous reste ".$essais." essais.<br>";
                echo $message; ?>
            </p>
        </section>
    </div>

</form>
</main>
<?php
require "inc/footer.php";
?>
