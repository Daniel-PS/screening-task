<?php

namespace App\Entities\User;

class UserRepository
{
    public function update(array $data, User $user): void
    {
        $user->update($data);
    }
}
