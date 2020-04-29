<?php


namespace App\Model\Db;

use App\Model\Container\Container;

/**
 * Class DbTable
 * @package App\Model\Db
 * Permettra d'effectuer des requêtes
 * CRUD sur nos tables.
 */
abstract class DbTable
{
    # Nom de la table
    protected $table;

    # Clé Primaire
    protected $primary ='id';

    # Instance de PDO
    /** @var \PDO $db */
    private $db;

    public function __construct()
    {
        # Récupération du Container
        $container = Container::getInstance();

        # Récupération de PDO
        $this->db = $container->get('pdo');
    }

    /**
     * Récupère l'instance de PDO.
     * @return \PDO
     */
    public function getDb(): \PDO
    {
        return $this->db;
    }

    /**
     * Récupérer toutes les informations
     * d'une table dans la BDD.
     * @param string $where
     * @return array
     */
    public function findAll(string $where = '')
    {
        # Requète SQL
        $sql = "SELECT * FROM " . $this->table;

        # Si $where n'est pas vide
        if( !empty( $where ) ) {
            $sql .= ' WHERE ' . $where;
        }

        # Préparation et Execution
        $query = $this->db->prepare( $sql );
        $query->execute();

        # Retourne le résultat
        return $query->fetchAll();
    }

    /**
     * Récupérer un enregistrement dans
     * la BDD depuis son ID
     * @param int $id
     * @return mixed
     */
    public function findOne(int $id)
    {
        # Requète ex. SELECT * FROM categorie WHERE id = 1
        $sql = "SELECT * FROM " . $this->table
            . " WHERE " . $this->primary . " = :id";

        # Préparation PDO
        $query = $this->db->prepare($sql);

        # Affectation des valeurs aux paramètres
        $query->bindValue(':id', $id, \PDO::PARAM_INT);

        # Execution de la requète
        $query->execute();

        # Retourne le résultat
        return $query->fetch();
    }
}
