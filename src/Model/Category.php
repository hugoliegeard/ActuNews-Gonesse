<?php

namespace App\Model;

use App\Model\Db\DbTable;

/**
 * Class Category
 * @package App\Model
 * Liaison avec la table category
 */
class Category extends DbTable
{
    protected $table = "category";
}