<?php

namespace App\Http\Controllers\mengingatAPI;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function validasi(){
        return request()->validate([
            "name" => "required|min:3|string|unique:users,name",
            "username" => "required|alpha_num|min:3|unique:users,username",
            "email" => "required|unique:users,email",
            "password" => "required|min:3"
        ]);
    }
    public function __invoke(Request $request)
    {
        $this->validasi();
        $tampung = request()->all();
        return "Data Berhasil di daftarkan";
    }
}
