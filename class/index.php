<?php
    require_once 'telephone.php';

    $monTel = new \telephone\telephone("Apple", "iPhone 13 Pro", 50, true);
    echo "<pre>";
    var_dump($monTel);
    echo "<br>Modele téléphone : $monTel->modele <br>";
    echo "Marque téléphone : $monTel->marque <br>";
    echo "Niveau de batterie : $monTel->batterie% <br>";

    $monTel->modele = "iPhone 14";
    $monTel->batterie = 90;
    echo "<br>Modele téléphone : $monTel->modele <br>";
    echo "Marque téléphone : $monTel->marque <br>";
    echo "Niveau de batterie : $monTel->batterie% <br>";

    /**
     * Tests des méthodes de notre objet
     */
    $monTel->voirInfos();
    $monTel->eteindre();
    var_dump($monTel);
    $monTel->allumer();
    var_dump($monTel);
    $monTel->envoyerSMS("Fred", "<br>Coucou !");
