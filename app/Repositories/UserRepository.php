<?php

namespace App\Repositories;

use App\Interfaces\IUserRepository;
use App\Models\Users;

class UserRepository extends Repository implements IUserRepository {
    /**
     * UserRepository constructor.
     *
     * @param Users $model
     */
    public function __construct(Users $model)
    {
        parent::__construct($model);
    }

    public function getUsers() {
        $users = Users::all();

        return $users;
    }
}

?>
