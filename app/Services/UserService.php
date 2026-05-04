<?php

namespace App\Services;

use Illuminate\Support\Facades\Auth;

class UserService
{
    public function updateUser(array $data, $image = null)
    {
        $user = Auth::user();

        if ($image) {
            $data['image'] = $image->store('images', 'public');
        }

        $user->update($data);

        return $user;
    }
}
