<?php
// TEST DU NOM
if ($_SERVER['REQUEST_METHOD'] === "POST"){
//L'existence
    if (!array_key_exists('name', $_POST)) {
        var_dump("le nom n'existe pas!");
    }else {
        //La non nullite
        if($_POST['name'] === ''){
            var_dump("il faut saisir un nom");
        }else{
            //Le type => pas de verif pour une chaine de caractère
            //Valeur mini (0)
            //Valeur maxi (255)
            if(strlen($_POST['name'])>255){
                var_dump("Votre nom n'est pas valide (max 255 caractères)");
            }
        }
    }
    if (!array_key_exists('desc', $_POST)) {
        var_dump("Il faut rentrer la description du produit");
    }else {
        //La non nullite
        if($_POST['desc'] === ''){
            var_dump("La description est vide");
        }else{
            //Le type => pas de verif pour une chaine de caractère
            //Valeur mini (0)
            //Valeur maxi (255)
            if(strlen($_POST['desc'])<50){
                var_dump("La description doit faire plus de 50 caractères");
            }elseif(strlen($_POST['desc'])>500){
                var_dump("La description doit comporter moins de 500 caractères");
            }
        }
    }
    if (!array_key_exists('prix', $_POST)) {
        var_dump("Merci de renter un prix");
    }else {
        //La non nullite
        if($_POST['prix'] === ''){
            var_dump("Merci de rentrer un prix");
        }else{
            //Le type => pas de verif pour une chaine de caractère
            if(!is_numeric($_POST['prix'])){
                var_dump("Le prix ne peut être qu'un nombre");
            }else{
                $_POST['prix'] = floatval($_POST['prix']);
                //Valeur mini (0)
                //Valeur maxi (255)
                if($_POST['prix']<0){
                    var_dump("Le prix ne peut pas être négatif");
                }elseif($_POST['prix']>4000){
                    var_dump("Le prix d'un article ne peut pas être supérieur à 4000");
                }
            }
        }
    }
    if (!array_key_exists('valid', $_POST)) {
        $_POST['valid'] = false;
    }else{
        $_POST['valid'] = true;
    }
    var_dump($_POST['valid']);




    if (!array_key_exists('date', $_POST)) {
        var_dump("Merci de renter une date de parution");
    }else {
        //La non nullite
        if($_POST['date'] === ''){
            var_dump("Merci de rentrer une date de parution");
        }else{
            if(strlen($_POST['date']) === 10) {
                $date = explode("-", $_POST['date']);

                //Le type => pas de verif pour une chaine de caractère
                if (sizeof($date) === 3){
                    $annee = intval($date[0]);
                    $mois = intval($date[1]);
                    $jour = intval($date[2]);
                    if (!checkdate($mois, $jour, $annee) == true) {
                        var_dump("la date saisie n'est pas conforme");
                    }
                } else {
                    var_dump("La date n'est pas valide");
                }
            }
        }
    }
    if (!array_key_exists('vues', $_POST)) {
        var_dump("Merci de renter un nombre de vues");
    }else {
        //La non nullite
        if($_POST['vues'] === ''){
            var_dump("Merci de rentrer un nombre de vues");
        }else{
            //Le type => pas de verif pour une chaine de caractère
            if(!is_numeric($_POST['vues'])){
                var_dump("Le nombre de vues ne peut être qu'un nombre");
            }else{
                $_POST['vues'] = intval($_POST['vues']);
                //Valeur mini (0)
                //Valeur maxi (255)
                if($_POST['vues']<0){
                    var_dump("Le nombre de vues ne peut pas être négatif");
                }elseif($_POST['vues']>4000){
                    var_dump("Le nombre de vues ne peut pas être supérieur à 4000");
                }
            }
        }
    }
}
