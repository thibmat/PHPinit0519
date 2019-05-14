
<?php
require "inc/header.php";
echo "<h1 style=\"margin-left:60px;\">L'exterieur</h1>";
echo "<main class='container'>";

$products =[
    [
        "name"=>"Hamac",
        "description"=>"Pour se reposer après 5 jours de PHP",
        "lien"=>"hamac.jpg",
        "prix"=>100
    ],[
        "name"=>"Parasol",
        "description"=>"Pour faire de l'ombre au hamac",
        "lien"=>"parasol.jpg",
        "prix"=>50
    ],[
        "name"=>"Table de jardin",
        "description"=>"Pour s'installer sour le parasol",
        "lien"=>"table.jpg",
        "prix"=>200
    ],[
        "name"=>"chaises de jardin",
        "description"=>"Pour etre bien assis",
        "lien"=>"chaise.jpg",
        "prix"=>30
    ],[
        "name"=>"Piscine",
        "description"=>"pour se raffraichir",
        "lien"=>"piscine.jpg",
        "prix"=>250
    ],[
        "name"=>"Ballon de volley",
        "description"=>"pour s'amuser",
        "lien"=>"ballon.jpg",
        "prix"=>20
    ],
];
echo "<div class=\"row justify-content-around\">";
foreach ($products as $values):?>
    <div class="card" style="width: 30%;margin:5px;">
        <figure style="width:100%;height:400px;padding:10px">
            <img src="img/<?php echo $values['lien'];?>" class="card-img-top img-fluid mw-100 mh-100 rounded-circle" alt="...">
        </figure>
        <div class="card-body">
        <h5 class="card-title w-100 text-center"><?php echo $values['name']." - ".$values['prix']."€";?></h5>
        <p class="card-text"><?php echo $values['description'];?></p>
        <a href="#" class="btn btn-dark btn-block">Acheter!</a>
    </div>
    </div>
<?php
endforeach;
echo "</div></main>";
require "inc/footer.php";
?>