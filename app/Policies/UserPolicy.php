<?php

namespace App\Policies;

use App\Entities\User\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    public function update(User $user): bool
    {
        return $user->isAdmin() || $user->id === auth()->user()->id;
    }
}
