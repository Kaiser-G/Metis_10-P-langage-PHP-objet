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
    echo "Voiture assuré ?";
    $voiture2 -> setAssure(false);
    echo "<p>". $voiture2 -> getMessage_au_tableau_de_bord()."</p>";


    //echo "<p>Je repeind voiture 2</p>"
    $voiture2 -> Repeindre("jaune");
    echo "<p>". $voiture2 -> getMessage_au_tableau_de_bord()."</p>";
    //echo "La couleur de la voiture 2 est :".$voiture2->getCouleur();

    // Méthode Mettre_essence
    //Mettre de l'essence
    $niveau = $voiture2 -> Mettre_essence(80);
    echo "<p>". $voiture2 -> getMessage_au_tableau_de_bord()."</p>";

    $voiture2 -> Se_deplacer(50, 90);
    echo "<p>". $voiture2 -> getMessage_au_tableau_de_bord()."</p>";

    // Méthode magique __toString()
    echo $voiture2;


    //Porshe de Fabrice

    // J'achete une Porshe
    $maPorshe = new Voiture("AA 123 AA", "Rouge", 850, 25, 70, 4);

    // Je regarde le tableau de bord
    //echo $maPorshe->getMessage(). "<br/>";

    // Exploration Objet
    var_dump($maPorshe);

    // J'assure
    $maPorshe->setAssure(true);
    // Je regarde le tableau de bord
    echo "<br/>" . $maPorshe->getMessage_au_tableau_de_bord(). "<br/>";

    // Je passe à la pompe
    $niveau = $maPorshe->Mettre_essence(50);
    // Je regarde le tableau de bord
    echo "<br/>" . $maPorshe->getMessage_au_tableau_de_bord(). "<br/>";

    // J'ajoute de l'essence
    $niveau = $maPorshe->Mettre_essence(20);
    // Je regarde le tableau de bord
    echo "<br/>" . $maPorshe->getMessage_au_tableau_de_bord(). "<br/>";

    // Je roule 100Km à 90Km/h
    $maPorshe->Se_deplacer(100,90);
    // Je regarde le tableau de bord
    echo "<br/>" . $maPorshe->getMessage_au_tableau_de_bord(). "<br/>";

    // Je roule 1000Km à 200Km/h
    $maPorshe->Se_deplacer(1000,200);
    // Je regarde le tableau de bord
    echo "<br/>" . $maPorshe->getMessage_au_tableau_de_bord(). "<br/>";

    // Je repeins ma Porshe
    
    $maPorshe->Repeindre("bleu profond"); //   marche   ==> Message
    echo "<br/>" . $maPorshe->getMessage_au_tableau_de_bord(). "<br/>";

    $msg = "Niveau d'essence : ";
    $msg .= $maPorshe->getNiveau_essence();
    $msg .= " l.<br/>";
    echo $msg;

    // Méthode magique __toString()
    echo $maPorshe;
    ?>

<!-- Test de clonage -->
<p>J'ai cloner le dossier depuis mon git hub pro pour tester</p>
<p>Le 26 mai 2024</p>
</body>
</html>