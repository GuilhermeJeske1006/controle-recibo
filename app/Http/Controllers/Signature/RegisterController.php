<?php

namespace App\Http\Controllers\Signature;

use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function __invoke()
    {
        return view('signature.register');
    }
}
