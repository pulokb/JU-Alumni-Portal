<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\CheckLastDataTable;
use App\Http\Requests;
use App\Helpers\FileHelper;
use App\Http\Requests\CheckLastCreateRequest;
use App\Http\Requests\CheckLastUpdateRequest;
use App\Models\CheckLast;
use App\Http\Controllers\AppBaseController;
use Session;

class CheckLastController extends AppBaseController
{

    public function index(CheckLastDataTable $checkLastDataTable)
    {
        if (request()->ajax()) {
            return $checkLastDataTable->dataTableValue();
        }
        $dataTable = $checkLastDataTable->html();
        return  view('admin.check_lasts.index',compact('dataTable'));
    }


    public function create()
    {
        return view('admin.check_lasts.create');
    }


    public function store(CheckLastCreateRequest $request)
    {
        $input = $request->all();

        CheckLast::create($input);  
        //$imageName = FileHelper::uploadImage($request);      
        //CheckLast::create(array_merge($request->all(), ['image' => $imageName]));
        
        return back()->with('success','Check Last saved successfully.');
    }


    public function show($id)
    {
        $checkLast = CheckLast::find($id);

        if (empty($checkLast)) {
            Session::flash('error','Check Last not found');

            return redirect(route('admin.checkLasts.index'));
        }

        return view('admin.check_lasts.show')->with('checkLast', $checkLast);
    }


    public function edit($id)
    {
        $checkLast = CheckLast::find($id);

        if (empty($checkLast)) {
            Session::flash('error','Check Last not found');

            return redirect(route('admin.checkLasts.index'));
        }

        return view('admin.check_lasts.edit')->with('checkLast', $checkLast);
    }


    public function update($id, CheckLastUpdateRequest $request)
    {
        $checkLast = CheckLast::find($id);

        if (empty($checkLast)) {
           Session::flash('error','Check Last not found');

            return redirect(route('admin.checkLasts.index'));
        }

        // $imageName = FileHelper::uploadImage($request, $checkLast);
        // $checkLast->fill(array_merge($request->all(), ['image' => $imageName]));

        $checkLast->fill($request->all());
        $checkLast->save();

        Session::flash('success','Check Last updated successfully.');

        return redirect(route('admin.checkLasts.index'));
    }


    public function destroy($id)
    {
        $checkLast = CheckLast::findOrFail($id);
        //FileHelper::deleteImage($checkLast);
        $checkLast->delete();
    }
}
