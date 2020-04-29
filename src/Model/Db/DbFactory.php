<?php


namespace App\Model\Db;

/**
 * Class DbFactory
 * @package App\Model\Db
 * Une factory est une classe
 * capable de créer des objets.
 */
final class DbFactory
{
    /**
     * Fabrique et retourne une instance de PDO
     */
    public static function makePDO(): \PDO
    {
        $db = new \PDO('mysql:host='. DB_HOST . ';dbname=' . DB_NAME,
            DB_USER,
            DB_PASW);

        $db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_WARNING);
        $db->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);

        return $db;
    }
}