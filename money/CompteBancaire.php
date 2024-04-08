<?php


abstract class CompteBancaire
{
    /**
     * Définition des propriétés du compte bancaire (=> Caractéristiques)
     * - Numéro de compte
     * - Argent disponible
     * - Nom du titulaire
     */

    protected $numCompte;
    protected $solde;
    protected $titulaire;

    /**
     * Définitions des méthodes (=> actions réalisables)
     * - retirer
     * - déposer
     */

    /**
     * @param string $titulaire
     * @param float $
     */
    public function __construct(string $titulaire, float $solde, string $numCompte)
    {
        $this->titulaire = $titulaire;
        $this->solde = $solde;
        $this->numCompte = $numCompte;
    }

    public function voirInfo()
    {
        echo "Informations du compte : <br>";
        echo "Titulaire : $this->titulaire <br> N° Compte : $this->numCompte<br>Solde : this->solde <br>";
    }

    public function deposer(float $montant)
    {
        $this->setSolde(solde += $montant);
    }

    public function retirer(float $montant) {
        if ($this->solde -= $montant >=0) {
            $this->solde -= $montant;
        } else {
            echo "Retrait Impossible... <br>";
        }
    }
    public function virement(float $montant, string $destinataire)
    {
      echo "Virement vers le compte de $destinataire : <br>";
      if ($this->setSolde(solde - $montant >=0)) {
          $this->solde -= \CompteBancaire\montant;
      } else {
          echo "Virement impossible ... <br>";
      }
    }

    public function setSolde()
    {

    }

}