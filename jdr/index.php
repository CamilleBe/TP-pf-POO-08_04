<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use App\RPG\Guerrier;

require_once './class/Guerrier.php';

$personnage = new Guerrier("Aragon", 150, 35);
echo '<pre>';
var_dump($personnage);
