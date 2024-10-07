<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\SeminarDataTable;
use App\Http\Requests;
use App\Helpers\FileHelper;
use App\Http\Requests\SeminarCreateRequest;
use App\Http\Requests\SeminarUpdateRequest;
use App\Models\Seminar;
use App\Http\Controllers\AppBaseController;
use Session;

class SeminarController extends AppBaseController
{

    public function index(SeminarDataTable $seminarDataTable)
    {
        if (request()->ajax()) {
            return $seminarDataTable->dataTableValue();
        }
        $dataTable = $seminarDataTable->html();
        return  view('admin.seminars.index',compact('dataTable'));
    }


    public function create()
    {
        return view('admin.seminars.create');
    }


    public function store(SeminarCreateRequest $request)
    {
        $input = $request->all();

        // Seminar::create($input);  
        $imageName = FileHelper::uploadImage($request);      
        Seminar::create(array_merge($request->all(), ['image' => $imageName]));
        
        return back()->with('success','Seminar saved successfully.');
    }


    public function show($id)
    {
        $seminar = Seminar::find($id);

        if (empty($seminar)) {
            Session::flash('error','Seminar not found');

            return redirect(route('admin.seminars.index'));
        }

        return view('admin.seminars.show')->with('seminar', $seminar);
    }


    public function edit($id)
    {
        $seminar = Seminar::find($id);

        if (empty($seminar)) {
            Session::flash('error','Seminar not found');

            return redirect(route('admin.seminars.index'));
        }

        return view('admin.seminars.edit')->with('seminar', $seminar);
    }


    public function update($id, SeminarUpdateRequest $request)
    {
        $seminar = Seminar::find($id);

        if (empty($seminar)) {
           Session::flash('error','Seminar not found');

            return redirect(route('admin.seminars.index'));
        }

        $imageName = FileHelper::uploadImage($request, $seminar);
        $seminar->fill(array_merge($request->all(), ['image' => $imageName]));

        // $seminar->fill($request->all());
        $seminar->save();

        Session::flash('success','Seminar updated successfully.');

        return redirect(route('admin.seminars.index'));
    }


    public function destroy($id)
    {
        $seminar = Seminar::findOrFail($id);
        //FileHelper::deleteImage($seminar);
        $seminar->delete();
    }
}
