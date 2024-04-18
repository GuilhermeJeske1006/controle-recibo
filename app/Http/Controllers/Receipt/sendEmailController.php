<?php

namespace App\Http\Controllers\Receipt;

use App\Http\Controllers\Controller;
use App\Models\Receipt;
use App\Notifications\sendReceipt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class sendEmailController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Receipt $receipt)
    {
        try {
            Notification::route('mail', request()->email)
                        ->notify(new sendReceipt($receipt));

            return back()->with('success', 'Recibo enviado com sucesso!');
        } catch (\Throwable $th) {
            return back()->with('error', 'Erro ao enviar o recibo!');
        }
    }
}
