<?php
namespace App\Models;

use App\db\Database;

class Model extends Database {
    /**
     * Propriétés de ma classe
     */

    protected $table;
    private $db;

    public function sqlQuerry(string $query, array $attributs = null)
    {
        /**
         * PROCESS :
         * - Récupérer oucréer l'instance de Database.
         * - Exécuter une requête (simple => $attributs = null, requête préparée => $attributs = [data])
         */
        $this->db = Database::getInstance();

        if ($attributs !== null) {
            //Cas de la requête préparée
            $request = $this->db->prepare($query);
            $request->execute($attributs);
            return $request;
        } else {
            //Cas de la requête simple
            return $this->db->query($query);
        }
    }

    /**
     * Méthode CRUD
     *
     */

}
