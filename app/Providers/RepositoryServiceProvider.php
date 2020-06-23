<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interfaces\IRepository;
use App\Interfaces\IUserRepository;
use App\Repositories\Repository;
use App\Repositories\UserRepository;

class RepositoryServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->app->bind(
            IRepository::class,
            Repository::class
        );
        $this->app->bind(
            IUserRepository::class,
            UserRepository::class
        );
    }

}

?>
