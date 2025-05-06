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
        $budget = Budget::find($request->budget)
            ->load([
                'company',
            ]);

        if ($budget->company->photo) {
            $budget->company->photo = env('APP_URL') . 'storage/' . $budget->company->photo;
        }

        if ($budget->company->marca_dagua) {
            $budget->company->marca_dagua = env('APP_URL') . 'storage/' . $budget->company->marca_dagua;
        }

        $pdf = Pdf::loadView('pdf.budget', [
            'budget' => $budget,
        ]);

        return $pdf->setPaper('a4')->stream('budget.pdf');

    }
}
