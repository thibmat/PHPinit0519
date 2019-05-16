<?php
var_dump($_SESSION);
//Declaration de la function
function hello (){
    echo "<p>Bonjour</p>";
}
//Appel de la function
hello();


function helloPeople ($name) {
    echo "<p>Bonjour $name</p>";

}
$name = "John";
helloPeople($name);

function bonjourPeople2 ($name=null){
    echo "<p>Bonjour $name</p>";
}

bonjourPeople2('babar');
bonjourPeople2();


function addition ($nbre1,$nbre2){
    echo "resultat :".($nbre1 + $nbre2);
}
addition(10,15);

function minus($a, $b){
    return $a-$b;
}
$resultat = minus(10,5);
echo "<br>".$resultat;

?>