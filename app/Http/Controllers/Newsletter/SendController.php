<?php

namespace App\Http\Controllers\Newsletter;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SendController extends Controller
{
    public function __invoke(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        $email = $request->email;

        // Send email to $email
        // ...

        return redirect()->back()->with('message', 'Email sent!');
    }
}
