<?php

namespace App\Http\Controllers\Budget;

use App\Http\Controllers\Controller;
use App\Models\Budget;
use Illuminate\Http\Request;

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

        return view('budget.details', compact('budget'));
    }
}
