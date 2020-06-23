<?php

namespace App\Services;

use App\Repositories\UserRepository;

class UserService {

    protected $userRepo;
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepo = $userRepository;
    }

    public function getAllUser() {
        return $this->userRepo->getUsers();
    }

}

?>
