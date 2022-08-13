<?php

namespace App\InsertTest;

use App\Models\User;

class InsertUser {

    public function insert()
    {
        $user = new User();
        $user->username = 'hieu';
        $user->email = 'hieu@gmail.com';
        $user->password = '123456';
        $user->save();
    }
}
