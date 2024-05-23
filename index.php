<pre>
<?php
require_once './Classes/Voiture.php'; //Changer par la suite pour la méthode autoload

$voiture1 = new Voiture("AA", "Bleu", 1000, 500, 50, 2, "");
$voiture1 -> setAssure(TRUE);
var_dump($voiture1); 

$voiture2 = new Voiture("BB", "Rouge", 1500, 800, 100, 5, TRUE, "");
$voiture2 -> setAssure(FALSE);
var_dump($voiture2);

?>