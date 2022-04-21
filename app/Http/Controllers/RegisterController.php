<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class RegisterController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            'name' => ['required', 'string', 'min:5', 'max:25'],
            'username' => ['required', 'string', 'min:5', 'max:25'],
            'email' => ['required', 'max:100', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'min:8', 'max:255']
        ]);

        $users = User::create($attributes);

        auth()->login($users);

        return redirect()->route('login.success')->with('success', 'вы успешно вошли на сайт');
    }
}
