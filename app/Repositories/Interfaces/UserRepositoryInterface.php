<?php
namespace App\Repositories\Interfaces;

use App\Models\User;

interface UserRepositoryInterface
{
    public function all();

    public function getUserByLogin($login);

//    public function getUserByEmail(User $user);
}
