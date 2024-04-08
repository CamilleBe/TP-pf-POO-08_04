<?php
namespace App\RPG;

require_once 'Personnage.php';
class Voleur extends Personnage
{
    protected $agilite;

    public function  __construct(string $name, int $pv, int $agilite)
    {
        parent::__construct($name, $pv);
        $this->agilite = $agilite;
    }
}