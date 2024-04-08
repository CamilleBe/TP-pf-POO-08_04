<?php

namespace telephone;

class telephone {
    /**
     * Définition des propriétés du téléphone(=> Caractéristiques)
     * - marques
     * - modèle
     * - batterie
     * - allumé
     * - taille d'écran
     */
    public $marque;
    public $modele;
    public $batterie;
    public $allume;
    const TAILLE_ECRAN = 6;

    /**
     * Définitions des méthodes (=> actions réalisables)
     * - allumer()
     * - éteindre()
     * - envoyerSMS()
     * - AfficherInfos()
     */

    /**
     * Creation d'un objet
     *
     * @param string $marque
     * @param string $modele
     * @param int $batterie
     * @param bool $allume
     */

    public function __construct(string $marque, string $modele, int $batterie, bool $allume)
    {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->batterie = $batterie;
        $this->allume = $allume;

    }
}