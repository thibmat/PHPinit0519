<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PAGE PHP</title>
</head>
<body>
<h1>MON SITE</h1>

<?php
//Affichage de bonjour
echo '<p>Bonjour</p>';
$chiffre1 = 1.5;
$content = '<p>contenu de mon paragraphe : $chiffre1</p>';
$content2 = "<p>contenu de mon paragraphe : $chiffre1</p>";
echo $content;
echo $content2;

//LES CONSTANTES
const NB_ARTICLES_PER_PAGES = 6;
define("DATABASE_NAME", "php_projet");

echo NB_ARTICLES_PER_PAGES;
echo DATABASE_NAME;

echo '<p>'.__FILE__.'</p>';
$temp = -10;
/*
if ($temp > 0 && $temp < 20 ) echo "<p>Il fait bon, il fait : ".$temp." &deg</p>";
elseif ($temp >= 50) echo '<p>il fait beaucoup trop chaud, la température est de : '.$temp." &deg</p>";
elseif ($temp>=20 && $temp<=50) echo 'il fait bon c\'est l\'été';
else echo '<p>Ca caille, il fait : '.$temp." &deg</p>";
*/

if ($temp <=0) echo 'Il fait froid';
elseif ($temp <=20){echo 'il fait bon';}
elseif ($temp <= 50) {echo 'il fait chaud';}
else echo 'il fait beaucoup trop chaud';


//LES BOUCLES
//Objectif : creer une liste à puces (10 puces)

echo '<ul>';
$i = 1;
while ($i<=10){
    echo "<li>Puce n°".$i."</li>";
    $i++;
}
echo '</ul>';
//tableau indexé

$fruits =["kiwi","pamplemousse","citron","ananas","banane"];
echo '<ul>';
foreach($fruits as $fruits){
    echo "<li>$fruits</li>";
}
echo '</ul>';

//tableau associatif

$personne = [
        "nom"=>"verhaeghe",
        "prenom"=>"thibault",
        "age"=>36
];

?>

<table>
    <thead>
    <?php
        foreach ($personne as $key=>$value) {
            echo "<th>$key</th>";
        }
    ?>
    </thead>
    <tbody>
    <tr>
        <?php
        foreach ($personne as $value) {
            echo "<td>$value</td>";
        }
        ?>
    </tr>
    </tbody>
</table>
</body>
</html>