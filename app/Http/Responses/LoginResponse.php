<?php

namespace App\Http\Responses;

use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;

class LoginResponse implements LoginResponseContract
{
    public function toResponse($request)
    {
        $role = $request->user()->role;

        return match ($role) {
            'admin' => redirect()->intended('/admin/dashboard'),
            'trainee' => redirect()->intended('/trainee/dashboard'),
            default => redirect('/')
        };
    }
}