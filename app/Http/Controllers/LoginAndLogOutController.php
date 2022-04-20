<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginAndLogOutController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        /**
         * validation
         */
        $attributes = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        /**
         * check user
         */
        if(auth()->attempt($attributes)){
            return redirect()->route('login.success')->with('success', 'вы успешно вошли на сайт');;
        }

        return back()->withErrors([
            'email' => 'Неккоретный email',
            'password' => 'Ошибка при вводе пароля'
        ]);
    }

    public function loginPage()
    {
        return view('auth.success');
    }

    public function destroy()
    {
        auth()->logout();

        return redirect()->route('login.success')->with('logout', 'вы вышли');;
    }
}
