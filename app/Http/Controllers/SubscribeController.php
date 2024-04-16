<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubscribeController extends Controller
{
    public function __invoke(Request $request)
    {
        $user = User::find($request->user);

        $user->createOrGetStripeCustomer();

        if($user->subscribed('default')) {
            return $user->redirectToBillingPortal();
        }

        Auth::login($user);

        return $user
            ->newSubscription('default', env('STRIPE_PRICE_ID'))
            ->checkout()
            ->redirect();

    }
}
