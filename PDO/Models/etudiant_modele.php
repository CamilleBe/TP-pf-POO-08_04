<?php
namespace App\Models;
use App\Models\Model;

class EtudiantModel extends Model{
    /**
     * propriétés de la classe (cf. Table SQL)
     */
    protected $id;
    protected $nom;
    protected $prenom;
    protected $email;

    public function __construct(){
        $this->table = 'Etudiants';
    }



    /**
     * Get propriétés de la classe (cf. Table SQL)
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set propriétés de la classe (cf. Table SQL)
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of nom
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of prenom
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }
}