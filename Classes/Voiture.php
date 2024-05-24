<?php
class Voiture
{
//Les propriétés
private $immatriculation;// string
private $couleur;// – string 
private $poids;// – int 
private $puissance;// – int 
private $capacite_du_réservoir;// – float 
private $niveau_essence;// – float 
private $nombre_de_place;// – int 
private $assure;// – bool 
private $message_au_tableau_de_bord;// – string 

//Les construteurs
public function __construct($immat, $coul, $poids, $puis, $capa, $nbPlace){
    $this -> immatriculation = $immat;
    $this -> couleur = $coul;
    $this -> poids = $poids;
    $this -> puissance = $puis;
    $this -> capacite_du_réservoir = $capa;
    $this -> nombre_de_place = $nbPlace;

    $this -> niveau_essence = 5.0;
    $this -> assure = FALSE;
    $this -> message_au_tableau_de_bord = "Bienvenue à bord de votre nouveau véhicule";
}

//Getters
public function getImmatriculation(){
    return $this -> immat;
}

public function getCouleur(){
    return $this -> couleur;
}

public function getPoids(){
    return $this -> poids;
}

public function getPuissance(){
    return $this -> puissance;
}

public function getCapacite_du_réservoir(){
    return $this -> capacite_du_réservoir;
}

public function getNbPlace(){
    return $this -> nbPlace;
}

public function getNiveau_essence(){
    return $this -> niveau_essence;
}

public function getAssure(){
    return $this -> assure;
}

public function getMessage_au_tableau_de_bord(){
    return $this -> message_au_tableau_de_bord;
}

//Setters
public function setAssure($a){
    $this->assure = $a;
    if ($a) {
        $this -> message_au_tableau_de_bord = "Vous êtes assuré";
       
    } else {
        $this -> message_au_tableau_de_bord = "Attention vous n'êtes pas assurré !!!";
    }
    
}

// public function setMessage_au_tableau_de_bord($m){
//     $this -> message_au_tableau_de_bord = $m;
// }

//Les méthodes
//3. Methodes de service
//3.1 REPEINDRE LA VOITURE Repeindre()

public function Repeindre($Repeindre)
{
    if ($Repeindre === $this ->couleur ) {
        $this -> message_au_tableau_de_bord  = "Merci pour ce rafraîchissement";
    } else {
        // $couleur = $Repeindre;
        $this -> couleur = $Repeindre;
        $this -> message_au_tableau_de_bord  = "Merci pour la nouvelle couleur " . $this -> couleur ;
    }
    

}

// 3.2 FAIRE L’APPOINT D’ESSENCE Mettre_essence()

// public function Mettre_essence($Mettre_essence)
// { 
//     if ($Mettre_essence  > $this ->capacite_du_réservoir) {
//         $this ->message_au_tableau_de_bord = "Vous versez à coter";
//     } else {
//         $this ->message_au_tableau_de_bord = "Carburant ok";
//     }
    
// }

public function Mettre_essence($Mettre_essence)
{ 
    // $this -> niveau_essence + $Mettre_essence < $this ->capacite_du_réservoir
    
    if ($this -> niveau_essence && $Mettre_essence > $this ->capacite_du_réservoir) {
        $this ->message_au_tableau_de_bord = "Vous versez à coter";
    } else {
        $this -> niveau_essence += $Mettre_essence;
        $this ->message_au_tableau_de_bord = "Carburant ok, votre jauge a carburant est de "  . $this->niveau_essence. " Litres" ;
    }
    
}

//3.3 SE DEPLACER Se_deplacer()

public function conso($Distance, $Vitesse)
{
    //distance en km et vitesse moyenne
    //$this -> niveau_essence
    //Consommation de 10 l aux 100 km en ville, soit à une vitesse moyenne inférieure à 50 km/h; 
    $conso = 0;
    if ($vitesse < 50) {
        $conso = $uneDistance*0.1;
    //Consommation de 5 l aux 100 km en sur route, soit à une vitesse moyenne comprise entre 50 et 90 km/h ; 
    } elseif ($vitesse < 90) {
        $conso = $uneDistance*0.5;
    //Consommation de 8 l aux 100 km en sur autoroute, soit à une vitesse moyenne comprise entre 90 et 130 km/h ; 
    } elseif ($vitesse < 130) {
        $conso = $uneDistance*0.8;
    //Consommation de 12 l aux 100 km pour une vitesse moyenne supérieure à 130 km/h;
    } elseif ($vitesse < 90) {
        $conso = $uneDistance*0.12;
    } 
    return $conso;
}

public function Se_deplacer($Distance, $Vitesse)
{

}


}


?>