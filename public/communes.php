<?php
//INCLUSION EN TETE + NAVBAR
require "inc/header.php";
require "inc/connect.php";
    if (isset($_GET['region'])){
        $reponse2 = $bdd2->query('SELECT * FROM commune_francaise WHERE code_region =\''.$_GET['region'].'\' ORDER BY code_departement, nom_commune');
        $region = true;
        $villes = false;
    }elseif(isset($_GET['departement'])){
        $reponse3 = $bdd2->query('SELECT * FROm commune_francaise WHERE code_departement =\''.$_GET['departement'].'\' ORDER by nom_commune');
        $villes = true;
        $region = false;
    }
    else{
    $reponse = $bdd2->query('SELECT DISTINCT code_region, nom_region FROM commune_francaise ORDER BY code_region');
    $villes = false;
    $region = false;
    }

?>
<main class="container">
<h1>Les villes francaises</h1>
<table class="table table-bordered table-dark">
  <thead>
    <tr>
      <th scope="col">Code région</th>
      <th scope="col">Nom région</th>
      <th scope="col">Code département</th>
      <th scope="col">Nom Ville</th>
      <th scope="col">Population</th>
    </tr>
  </thead>
  <tbody>
  <?php
    if($region == false && $villes == false){
    while ($donnees = $reponse->fetch())
        {
    echo "<tr><td><a href='communes.php?region=".$donnees['code_region']."'>".$donnees['code_region']."</a></td><td>".$donnees['nom_region']."</td></tr>";
        }
    }elseif ($region == true){
        while ($donnees = $reponse2->fetch())
        {
            echo "<tr><td><a href='communes.php?region=".$donnees['code_region']."'>".$donnees['code_region']."</a></td><td>".$donnees['nom_region']."</td><td><a href='communes.php?departement=".$donnees['code_departement']."'>".$donnees['code_departement']."</td><td>".$donnees['nom_commune']."</td><td>".$donnees['population_totale']."</td></tr>";
        }
        
    }else{
        while($donnees = $reponse3->fetch())
        {
            echo "<tr><td><a href='communes.php?region=".$donnees['code_region']."'>".$donnees['code_region']."</a></td><td>".$donnees['nom_region']."</td><td><a href='communes.php?departement=".$donnees['code_departement']."'>".$donnees['code_departement']."</td><td>".$donnees['nom_commune']."</td><td>".$donnees['population_totale']."</td></tr>";
        }
    }
      ?>
  </tbody>
</table>
</main>
<?php
$reponse->closeCursor(); // Termine le traitement de la requête
require "inc/footer.php";
?>