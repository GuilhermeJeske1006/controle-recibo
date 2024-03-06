<?php

namespace App\Http\Controllers\Budget;

use App\Http\Controllers\Controller;
use App\Models\Budget;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DetailController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $budget =
        Budget::find($request->budget)
            ->load([
                'company',
            ]);

        $budget->company->photo = Storage::url($budget->company->photo);
        $budget->company->marca_dagua = Storage::url($budget->company->marca_dagua);

        return view('budget.details', compact('budget'));
    }
}
