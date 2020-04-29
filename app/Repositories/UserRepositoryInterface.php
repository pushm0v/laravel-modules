<?php

namespace App\Repositories;

interface UserRepositoryInterface
{
    /**
     * Get's a user by it's ID
     *
     * @param string
     */
    public function get($user_id);

    /**
     * Get's all userss.
     *
     * @return mixed
     */
    public function all();

    /**
     * Deletes a user.
     *
     * @param string
     */
    public function delete($user_id);

    /**
     * Updates a user.
     *
     * @param string
     * @param array
     */
    public function update($user_id, array $user_data);
}

?>