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

    /**
     * Méthode d'allumage du téléphone
     *
     * @return bool|bool
     */
    public function allumer()
    {
        echo "Allumage du téléphone";
        $this->allume = true;
    }

    /**
     * Méthode pour éteindre le téléphone
     *
     * @return void
     */
    public function eteindre()
    {
        echo "Le téléphone s'éteind";
        $this->allume = false;
    }

    /**
     * Méthode pour envoyer un SMS avec le téléphone
     *
     * @param string $destinataire
     * @param string $message
     * @return void
     */
    public function envoyerSMS(string $destinataire, string $message)
    {
        echo "Message envoyé à $destinataire";
        echo $message;
    }

    /**
     * Méthode pour afficher les informations de l'appareil.
     *
     * @return void
     */
    public function voirInfos()
    {
        echo "Informations du téléphone :";
        echo "Marque : this->$marque";
        echo "Modèle : this->$modele";
    }


}