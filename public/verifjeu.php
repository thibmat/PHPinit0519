<?php
// TEST DU NOM
if ($_SERVER['REQUEST_METHOD'] === "POST"){
    var_dump($_SESSION['n']);
    if (isset($_SESSION["n"]) && $_SESSION['n']<26){
        if (!array_key_exists('name', $_POST)) {
            $message = "Il faut rentrer une lettre";
        }else {
            //La non nullite
            if($_POST['name'] === ''){
                $message = "Il faut rentrer une lettre!";
            }else{
                //Le type => pas de verif pour une chaine de caractère
                //Valeur mini (0)
                //Valeur maxi (255)
                if($_POST['name'] === $_SESSION['resultat']){
                    $message = "Vous avez gagné, bravo !";
                    session_destroy();
                } else {
                    $message = "Perdu, essaye encore !";
                    $_SESSION["n"]++;
                }
            }
        }
    }else{
        $message = "vous avez tenté trop de fois, vous êtes nul";
        $_SESSION["n"] = 0;
        $_SESSION["resultat"] = genereLettre();
    }
}else{
    $_SESSION["resultat"] = genereLettre();
    $message = '';
    $_SESSION["n"] = 0;
}