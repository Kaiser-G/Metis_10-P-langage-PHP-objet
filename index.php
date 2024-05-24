<pre>
<?php
require_once './Classes/Voiture.php'; //Changer par la suite pour la méthode autoload

$message ="test";

$voiture1 = new Voiture("AA", "Bleu", 1000, 500, 50, 2, "");
$voiture1 -> setAssure(TRUE);
var_dump($voiture1); 

$voiture2 = new Voiture("BB", "Rouge", 1500, 800, 100, 5, TRUE, "");
//$voiture2 -> setAssure(FALSE);
var_dump($voiture2);

$voiture2 -> Repeindre("Vert");
var_dump($voiture2);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voiture</title>
</head>
<body>
    <h1>Voitures</h1>
    <?php
    //assurance
    $voiture2 -> setAssure(false);
    echo "<p>". $voiture2 -> getMessage_au_tableau_de_bord()."</p>";


    //echo "<p>Je repeind voiture 2</p>"
    $voiture2 -> Repeindre("jaune");
    echo "<p>". $voiture2 -> getMessage_au_tableau_de_bord()."</p>";
    //echo "La couleur de la voiture 2 est :".$voiture2->getCouleur();

    // Méthode Mettre_essence
    //Mettre de l'essence
    $niveau = $voiture2 -> Mettre_essence(20);
    echo "<p>". $voiture2 -> getMessage_au_tableau_de_bord()."</p>";





    ?>
</body>
</html>