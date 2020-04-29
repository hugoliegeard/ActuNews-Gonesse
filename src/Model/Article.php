<?php

namespace App\Model;

use App\Model\Db\DbTable;

/**
 * Class Article
 * @package App\Model
 * Correspond à la table Article
 * de la base de donnée.
 */
class Article extends DbTable
{
    protected $table = "article";
}