<?php

namespace App\Services;

use App\Models\User;
use App\Notifications\AccountDeleted;
use Illuminate\Support\Facades\DB;

class UserService
{
    public function delete(User $user)
    {
        DB::transaction(function () use ($user) {
            $user->comments()->delete();
            $user->posts()->delete();
            $user->delete();
        });
    
        $user->notify(new AccountDeleted($user));
    }
}