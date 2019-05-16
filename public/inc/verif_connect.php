<?php
if (isset($_GET['exit'])){
    session_destroy();
}
// TEST DU NOM
if ($_SERVER['REQUEST_METHOD'] === "POST") {
//L'existence
    if (!array_key_exists('mail', $_POST)) {
        $message = "Merci de rentrer un email";
    } else {
        //La non nullite
        if ($_POST['mail'] === '') {
            $message = "Merci de rentrer un email";
        } else {
            //Le type => pas de verif pour une chaine de caractère
            //Valeur mini (0)
            //Valeur maxi (255)
            if (strlen($_POST['mail']) > 255) {
                $message = "L'e-mail saisi n'est pas valide";
            }
            else {
                $mail = true;
            }
        }
    }
    if (!array_key_exists('pw', $_POST)) {
        $message2 = "Merci de rentrer un mot de passe";
    } else {
        //La non nullite
        if ($_POST['pw'] === '') {
            $message2 = "Merci de rentrer un mot de passe";
        } else {
            //Le type => pas de verif pour une chaine de caractère
            //Valeur mini (0)
            //Valeur maxi (255)
            if (strlen($_POST['pw']) > 255) {
                $message2 = "Le mot de passe saisi n'est pas valide";
            }else {
                $pw = true;
                $_POST['pw'] =  password_hash($_POST['pw'],PASSWORD_DEFAULT);
                var_dump($_POST['pw']);
            }
        }
    }
    if ($mail == true && $pw == true){
        $reponse = $bdd->query('SELECT * FROM user WHERE user_name = \''.$_POST['mail'].'\'');
        $donnees = $reponse->fetch();
        var_dump($donnees);
        $user = $donnees['user_name'];
        $password = $donnees['user_pw'];
        var_dump($password);
        if ($password === $_POST['pw']){
            $_SESSION['user'] = $donnees['user_name'];
        }
    }
var_dump($_SESSION);



}