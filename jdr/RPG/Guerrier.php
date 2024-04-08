<?php
namespace App\RPG;

require_once 'Personnage.php';
class Guerrier extends Personnage
{
    protected $force;

    public function  __construct(string $name, int $pv, int $force)
    {
        parent::__construct($name, $pv);
        $this->force = $force;
    }
}