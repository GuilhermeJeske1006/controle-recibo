<?php

namespace App\Http\Controllers\Budget;

use App\Http\Controllers\Controller;
use App\Models\Budget;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class DownloadController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {

        $pdf = Pdf::loadView('pdf.budget', [
            'budget' => Budget::find($request->budget)
                ->load([
                    'company',
                ]),
        ]);

        return $pdf->setPaper('a4')->stream('budget.pdf');

    }
}
