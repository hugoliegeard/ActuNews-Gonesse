<?php

namespace App\Model;

use App\Model\Db\DbTable;

/**
 * Class User
 * @package App\Model
 * Liaison avec la table user
 */
class User extends DbTable
{
    protected $table = 'user';
}