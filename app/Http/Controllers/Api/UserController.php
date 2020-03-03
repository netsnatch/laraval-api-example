<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\UserService;

class UserController extends Controller
{
    public function delete(User $user, UserService $userService)
    {
        $userService->delete($user);
        
        return response([], 204);
    }
}