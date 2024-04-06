<?php

namespace App\Http\Controllers\Budget;

use App\Http\Controllers\Controller;
use App\Models\Budget;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        $budget->company->photo       = Storage::url($budget->company->photo);
        $budget->company->marca_dagua = Storage::url($budget->company->marca_dagua);

        $pdf = Pdf::loadView('pdf.budget', [
            'budget' => $budget,
        ]);

        return $pdf->setPaper('a4')->stream('budget.pdf');

    }
}
