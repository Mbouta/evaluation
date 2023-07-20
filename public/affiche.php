<?php 
const BASE_PATH = '../';

include '../core/autoloader.php';


$afficheHeure = new Visiteur();
$listeHoraire = $afficheHeure->selectAllHoraire();

foreach ($listeHoraire as $horaire) {
    
    $statut = 'Ouvert';

    if ($horaire['status'] == '0') {
        $statut = 'Fermé';
    }
    echo $horaire['jour'].': '.$horaire['am'].' - '.$horaire['pm'].' '.$statut."<br>";
    
}

// Récupération des SERVICES DE L'ACCUEIL
const IMAGE_PATH = '../admin/app/traitement/service/images/';

$afficheService = new Visiteur();
$listeService = $afficheHeure->selectAllService();
    // var_dump($listeService);
 // echo "<img src=".IMAGE_PATH.">";

    foreach ($listeService as $service) {
       echo "<img src=".IMAGE_PATH.$service['image'].">".$service['titre'].$service['contenu']."<br>";
    }

// Récupération des SERVICES DE L'ACCUEIL
$afficheService = new Visiteur();
$listeService = $afficheHeure->selectAllService();
    // var_dump($listeService);
 // echo "<img src=".IMAGE_PATH.">";

    foreach ($listeService as $service) {
       echo "<img src=".IMAGE_PATH.$service['image'].">".$service['titre'].$service['contenu']."<br>";
    }




?>