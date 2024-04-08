<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use App\Autoloader;
use App\RPG\Guerrier;
use App\RPG\Voleur;

//require_once './RPG/Guerrier.php';
require_once 'Autoloader.php';
Autoloader::register();

$personnage = new Guerrier("Aragon", 150, 35);
$voleur = new Voleur("Aragon", 150, 35);

echo '<pre>';
var_dump($personnage);
var_dump($voleur);

