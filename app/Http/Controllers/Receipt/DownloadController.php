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
        $pdf = Pdf::loadView('pdf.index', [
            'receipt' => Receipt::where('user_id', auth()->id())
                ->with(['bankTransfers', 'checks', 'pixs', 'company'])
                ->latest()
                ->first(),
        ]);

        return $pdf->setPaper('a4')->stream('receipt.pdf');

    }
}
