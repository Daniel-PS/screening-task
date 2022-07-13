<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\JsonResponse;

class UserController extends Controller
{
    public function __construct(private UserService $userService)
    {
    }

    public function update(UpdateUserRequest $request, User $user): JsonResponse
    {
        $this->userService->update($request->validated(), $user);
        return response()->json(['success' => true, 'message' => 'User updated']);
    }
}
