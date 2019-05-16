<?php
session_start();
//INCLUSION EN TETE + NAVBAR
require "inc/header.php";
//INCLUSION DU LOGIN MYSQL
require "inc/connect.php";
$message = '';
$message2 = '';
//INCLUSION TRAITEMENT FORMULAIRE
require "inc/verif_connect.php";
?>

<main class="text-center container w-25">

    <?php
    if (!isset($_SESSION['user'])) {
        ?>
        <form class="form-signin" method="post">
            <h1 class="h3 mb-3 font-weight-normal">Connexion</h1>
            <label for="inputEmail" class="sr-only">Adresse Email</label>
            <input type="email" id="inputEmail" name="mail" class="form-control" placeholder="Adresse E-Mail"
                   required="" autofocus="">
            <label for="inputPassword" class="sr-only">mot de passe</label>
            <input type="password" id="inputPassword" name="pw" class="form-control" placeholder="Mot de passe"
                   required="">
            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Se souvenir de moi
                </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Se connecter</button>

            <label>
                <p><?php echo $message . "<br>" . $message2; ?></p>
            </label>
        </form>
        <?php
    } else {
        echo "Hello ".$_SESSION['user'];
        echo "<br><a href='?exit=yes'>Se déconnecter</a>";
    }
    ?>

</main>



<?php
require "inc/footer.php";
?>


