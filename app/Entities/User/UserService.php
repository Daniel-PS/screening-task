<?php

namespace App\Entities\User;

class UserService
{
    public function __construct(private UserRepository $userRepository)
    {
    }

    public function update(array $data, User $user): void
    {
        $this->userRepository->update($data, $user);
    }
}
