<?php

namespace App\Http\Controllers\Signature;

use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function __invoke()
    {
        if(user() != null) {

            if(user()->subscribed('default')) {
                return user()->redirectToBillingPortal();
            }

        }

        return view('signature.register');
    }
}
