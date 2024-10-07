<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\ScholarshipDataTable;
use App\Http\Requests;
use App\Helpers\FileHelper;
use App\Http\Requests\ScholarshipCreateRequest;
use App\Http\Requests\ScholarshipUpdateRequest;
use App\Models\Scholarship;
use App\Http\Controllers\AppBaseController;
use App\Models\UserScholarship;
use Session;

class ScholarshipController extends AppBaseController
{

    public function index(ScholarshipDataTable $scholarshipDataTable)
    {
        if (request()->ajax()) {
            return $scholarshipDataTable->dataTableValue();
        }
        $dataTable = $scholarshipDataTable->html();
        return  view('admin.scholarships.index', compact('dataTable'));
    }


    public function create()
    {
        return view('admin.scholarships.create');
    }


    public function store(ScholarshipCreateRequest $request)
    {
        $input = $request->all();

        Scholarship::create($input);
        //$imageName = FileHelper::uploadImage($request);      
        //Scholarship::create(array_merge($request->all(), ['image' => $imageName]));

        return back()->with('success', 'Scholarship saved successfully.');
    }


    public function show($id)
    {
        $scholarship = Scholarship::find($id);

        if (empty($scholarship)) {
            Session::flash('error', 'Scholarship not found');

            return redirect(route('admin.scholarships.index'));
        }

        return view('admin.scholarships.show')->with('scholarship', $scholarship);
    }


    public function edit($id)
    {
        $scholarship = Scholarship::find($id);

        if (empty($scholarship)) {
            Session::flash('error', 'Scholarship not found');

            return redirect(route('admin.scholarships.index'));
        }

        return view('admin.scholarships.edit')->with('scholarship', $scholarship);
    }


    public function update($id, ScholarshipUpdateRequest $request)
    {
        $scholarship = Scholarship::find($id);

        if (empty($scholarship)) {
            Session::flash('error', 'Scholarship not found');

            return redirect(route('admin.scholarships.index'));
        }

        // $imageName = FileHelper::uploadImage($request, $scholarship);
        // $scholarship->fill(array_merge($request->all(), ['image' => $imageName]));

        $scholarship->fill($request->all());
        $scholarship->save();

        Session::flash('success', 'Scholarship updated successfully.');

        return redirect(route('admin.scholarships.index'));
    }


    public function destroy($id)
    {
        $scholarship = Scholarship::findOrFail($id);
        //FileHelper::deleteImage($scholarship);
        $scholarship->delete();
    }
    public function status($id)
    {
        $scholarship = Scholarship::findOrFail($id);
        if ($scholarship->status == 0) {
            $scholarship->status = 1;
        } else {
            $scholarship->status = 0;
        }
        $scholarship->save();
        return back()->with('success', 'Status Changed');
    }

    public function applicants($id)
    {
         $userScholarships = UserScholarship::where('scholarship_id', $id)->with('user')->get();
        return view('admin.scholarships.applicants', compact('userScholarships'));
    }
}
