<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        request()->validate([
            "name" => ['required','string','min:3','max:25','unique:users,name'],
            "username" => ['required','alpha_num','min:3','unique:users,username'],
            "email" => ['required','unique:users,email'],
            "password" => ['required'],
        ]);

        $tampung = request()->all();
        $tampung['password'] = bcrypt(request()->password);
        User::create($tampung);

        return response('Akun Berhasil Di Daftar kan');
    }
}
