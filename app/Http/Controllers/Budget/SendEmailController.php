<?php

namespace App\Http\Controllers\Budget;

use App\Http\Controllers\Controller;
use App\Models\Budget;
use App\Notifications\sendBudget;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class SendEmailController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Budget $budget)
    {
        try {
            Notification::route('mail', request()->email)
                        ->notify(new sendBudget($budget));

            return back()->with('success', 'Orçamento enviado com sucesso!');
        } catch (\Throwable $th) {
            return back()->with('error', 'Erro ao enviar o orçamento!');
        }
    }
}
