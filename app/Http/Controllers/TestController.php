<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

class TestController extends Controller
{
    public function create(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'last_name' => 'required',
            'nick_name' => 'required',
            'sex' => 'required',
            'email_agree' => 'required',
            'avatar' => 'required'
        ]);

        if ($request->hasFile('avatar')) {
            $path = Storage::putFile('public', $request->file('avatar'));
        }

        $user = new User();
        $user->nick_name = $request->nick_name;
        $user->name = $request->name;
        $user->email = $request->nick_name . '@test.ru';
        $user->password = $request->nick_name;
        $user->last_name = $request->last_name;
        $user->email_agree = $request->email_agree;
        $user->sex = $request->sex;
        $user->avatar_path = Storage::url($path);
        $user->phone_number = $request->phone_number;

        $user->save();

        return view('welcome', ['user' => $user]);
    }
}
