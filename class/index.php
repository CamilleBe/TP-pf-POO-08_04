<?php
require_once 'CompteBancaire.php';

$compte = new \CompteBancaire\CompteBancaire("Camille", 1005, "000558616785223");
echo "<pre>";
var_dump($compte);
$compte->voirInfos();
$compte->deposer(150);
$compte->voirInfos();
$compte->retirer(150);
$compte->voirInfos();
$compte->retirer(150000);


