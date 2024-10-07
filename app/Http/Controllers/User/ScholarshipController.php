<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Scholarship;
use App\Models\UserScholarship;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ScholarshipController extends Controller
{
    public function applyView($id)
    {
        $scholarship = Scholarship::where('status', 1)->where('id', $id)->first();
        if (!$scholarship) {
            abort(404);
        }
        return view('user.scholarship_apply', compact('scholarship'));
    }

    public function apply(Request $request, $id)
    {
        $this->validate($request, [
            'father_occupation' => 'required|string',
            'father_income' => 'required|string',
            'mother_occupation' => 'required|string',
            'mother_income' => 'required|string',
            'siblings' => 'required|string',
            'reasons' => 'required|string',
        ]);
        $scholarship = Scholarship::where('status', 1)->where('id', $id)->first();
        if (!$scholarship) {
            abort(404);
        }
        UserScholarship::create(array_merge($request->all(), ['user_id'=> Auth::id(), 'scholarship_id' => $id]));
        return back()->with('success', 'Applied Successful.');
    }
}
