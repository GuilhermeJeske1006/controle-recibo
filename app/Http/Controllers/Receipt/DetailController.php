<?php

namespace App\Http\Controllers\Receipt;

use App\Http\Controllers\Controller;
use App\Models\Receipt;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $receipt =
            Receipt::find($request->receipt)
                ->load([
                    'bankTransfers',
                    'checks',
                    'pixs',
                    'company',
                ]);

        return view('receipt.details', compact('receipt'));
    }
}
