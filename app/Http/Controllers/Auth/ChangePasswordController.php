<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ChangePasswordController extends Controller
{
    public function create()
    {
        return view('password.change');
    }

    public function store(Request $request, $id)
    {
        /**
         * validation
         */
        $request->validate([
            'old_password' => 'required|max:255',
            'password' => 'required|max:255|confirmed',
            'password_confirmation' => 'required|max:255'
        ]);

        /**
         * check old password
         */
        if(!Hash::check($request->old_password, auth()->user()->password)){
            return back()->with('error', 'Старый пароль введен неверно.');
        }

        /**
         * update data to database
         */
        $user = User::whereId($id)->update([
            'password' => Hash::make($request->input('password'))
        ]);

        /**
         * if previous operation have successed we upload
         */
        if($user){
            return redirect()->route('password.change', ['id' => auth()->user()->id])->with('change', 'ваш пароль был успешно изменен!');
        }
    }
}
