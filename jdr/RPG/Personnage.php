<?php

namespace App\RPG;

abstract class Personnage
{
    public $name;
    protected $pv;

    public function __construct(string $name, int $pv) {
        $this->name = $name;
        $this->pv = $pv;
    }

    /**
     * Get value of pv
     *
     */
    public function getPv() {
        return $this->pv;
    }

    /**
     * Set the value of pv
     *
     * return self
     */

    public function setPv(int $pv) {
        $this->pv = $pv;

        return $this;
    }
}