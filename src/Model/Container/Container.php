<?php

namespace App\Model\Container;

/**
 * Class Container
 * @package App\Model\Container
 * --------------------------------------
 * L'objectif d'un container est de garder
 * en mémoire les différentes instances de
 * notre application, et les redistribuer
 * à la demande. cf. PSR-11.
 */

# Une class "final" ne peux pas être hérité.
final class Container
{
    # Stocker les instances de notre application.
    private $instances;

    # Stocker l'instance de notre container
    private static $instance;

    # On bloque l'instantiation de la classe,
    # depuis l'extérieur.
    private function __construct()
    {
        $this->instances = [];
    }

    /**
     * Permet de récupérer une isntance
     * @param string $key
     * @return mixed
     */
    public function get(string $key)
    {
        return $this->instances[ $key ];
    }

    /**
     * Permet de stocker une instance
     * @param string $key
     * @param $value
     */
    public function set(string $key, $value)
    {
        $this->instances[ $key ] = $value ;
    }

    /**
     * Permet de vérifier la présence d'une instance
     * @param string $key
     * @return bool
     */
    public function has(string $key)
    {
        return in_array($key, $this->instances);
    }

    /**
     * Permet de retourner une instance
     * UNIQUE du container.
     * ----------------------
     * Implémentation du SINGLETON.
     */
    public static function getInstance()
    {
        /**
         * Je crée une instance de container
         * UNIQUEMENT si self::$instance
         * n'existe pas !
         */
        if ( !isset(self::$instance) ) {
            self::$instance = new self();
        }

        /**
         * La première fois, je retourne une nouvelle instance ;
         * Les fois suivante, je retourne la même instance.
         */
        return self::$instance;
    }

}