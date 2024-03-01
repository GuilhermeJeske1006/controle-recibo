<?php

namespace App\Http\Controllers\Receipt;

use App\Http\Controllers\Controller;
use App\Models\Receipt;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class DownloadController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $pdf = Pdf::loadView('pdf.receipt', [
            'receipt' => Receipt::find($request->receipt)
                ->load([
                    'bankTransfers',
                    'checks',
                    'pixs',
                    'company',
                ]),
        ]);

        return $pdf->setPaper('a4')->stream('receipt.pdf');

    }
}
