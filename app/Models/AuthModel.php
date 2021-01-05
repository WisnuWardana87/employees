<?php

namespace App\Models;

use CodeIgniter\Model;

class AuthModel extends Model
{
    public function getUserInfo($username, $password)
    {
        $db = \Config\Database::connect();

        $query = $db->table('auth')
            ->where('username', $username)
            ->where('password', md5('password'))
            ->get();
        return $query->getResult();
    }
}
