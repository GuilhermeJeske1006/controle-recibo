<?php

namespace App\Http\Controllers\Receipt;

use App\Http\Controllers\Controller;

class CheckoutController extends Controller
{
    public function __invoke()
    {
        return view('receipt.checkout');
    }
}
