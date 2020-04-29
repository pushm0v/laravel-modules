<?php

namespace App\Repositories;

use App\Models\Users;

class UserRepository implements UserRepositoryInterface
{
    /**
     * Get's a user by it's ID
     *
     * @param string
     * @return collection
     */
    public function get($user_id)
    {
        return Users::find($user_id);
    }

    /**
     * Get's all users.
     *
     * @return mixed
     */
    public function all()
    {
        return Users::all();
    }

    /**
     * Deletes a user.
     *
     * @param string
     */
    public function delete($user_id)
    {
        Users::destroy($user_id);
    }

    /**
     * Updates a user.
     *
     * @param string
     * @param array
     */
    public function update($user_id, array $user_data)
    {
        Users::find($user_id)->update($user_data);
    }
}
?>