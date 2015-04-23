<?php namespace Larabook\Statuses;

use Larabook\Users\User;

class StatusRepository
{
    public function getAllForUser(User $user)
    {
        return $user->statuses;
    }

    /**
     * Save a new status for a user
     *
     * @param Status $status
     * @param $userId
     */
    public function save(Status $status, $userId)
    {
        return User::findOrFail($userId)->statuses()->save($status);
    }
}