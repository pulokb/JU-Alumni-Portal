<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\FileHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProgramCreateRequest;
use App\Http\Requests\ProgramUpdateRequest;
use App\Models\ContactFeedback;
use App\Models\Program;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Image;
use File;
use Str;

class ProgramController extends Controller
{
    public $category;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $category = $request->category;
        return view('admin.programs.index', compact('category'));
    }
    public function dataTableValues($category = NULL)
    {
        $programs = Program::where('category', $category)->get();
        if (request()->ajax()) {
            return DataTables::of($programs)
                ->addIndexColumn()
                ->addColumn('details', function (Program $program) {
                    return Str::limit($program->details, 100);
                })
                ->addColumn('image', function (Program $program) {
                    return "<img height='50px' width = '50px' alt='' src='" . asset('images/' . $program->image) . "' />";
                })
                ->addColumn('action', function (Program $program) {
                    return
                    "<a class='border-0 btn-sm btn-transition btn btn-outline-primary' href='" . route('admin.programs.show', $program->id) . "'>View</a> <br> " .
                "<a class='border-0 btn-sm btn-transition btn btn-outline-info' href='" . route('admin.programs.edit', $program->id) . "'>Edit</a> <br> " .

                        ' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $program->id . '" data-original-title="Delete" class="border-0 btn-sm btn-transition btn btn-outline-danger delete">Delete</a>';
                })
                ->rawColumns(['action', 'image', 'details'])
                ->make(true);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $category = $request->category;
        return view('admin.programs.create', compact('category'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProgramCreateRequest $request)
    {
        $imageName = FileHelper::uploadImage($request);
        Program::create(array_merge($request->all(), ['image' => $imageName]));
        return back()->with('success', 'Successfully Created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function show(Program $program)
    {

        return view('admin.programs.show', compact('program'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function edit(Program $program)
    {
        return view('admin.programs.edit', compact('program'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function update(ProgramUpdateRequest $request, Program $program)
    {
        $imageName = FileHelper::uploadImage($request,$program);
        $program->fill(array_merge($request->all(), ['image' => $imageName]))->save();
        return back()->with('success', 'Update Successful.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function destroy(Program $program)
    {
        FileHelper::deleteImage($program);
        $program->delete();
    }
}
