<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    private $data;

    function __construct()
    {

    }


    public function showLogin()
    {
        $this->data['title'] = 'Login | ';
        return view('login.default')->with($this->data);
    }
}
