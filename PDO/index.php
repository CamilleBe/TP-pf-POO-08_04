<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


use App\Autoloader;
use App\Models\EtudiantModel;

require_once "Autoloader.php";
Autoloader::register();

$etudiantModel = new EtudiantModel;
echo "<pre>";
//var_dump($etudiantModel);
//var_dump($etudiantModel->findAll());
//var_dump($etudiantModel->find(2));
//var_dump($etudiantModel->findBy(['nom' => 'alves']));

/*$etudiant = $etudiantModel->setNom('Doe')
    ->setPrenom('camille')
    ->setEmail('camille@c.com');
$etudiantModel->create($etudiant);
var_dump($etudiantModel->findAll());*/

$postDatas = [
    "nom" => "Dupont",
    "prenom" => "Jean",
    "email" => "jean@c.com"
];

$eleve = $etudiantModel->hydrate($postDatas);
var_dump($eleve);
$etudiantModel->create($eleve);