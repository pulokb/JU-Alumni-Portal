<?php

namespace App\Http\Controllers\User;

use App\Helpers\FileHelper;
use App\Http\Controllers\Controller;
use App\Models\Training;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TrainingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trainings = Training::where('user_id', Auth::id())->latest()->get();
        return view('user.trainings', compact('trainings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.training_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'institute' => 'required|string|max:191',
            'subject' => 'required|string|max:191',
            'from' => 'required|date',
            'to' => 'required|date',
            'details' => 'required|string|max:65530',
            'file' => 'nullable|mimes:jpg,png,jpeg,gif,doc,docx,pdf,ppt,pptx,xls,xlsx|max:10000'
        ]);

        $fileName = FileHelper::uploadFile($request);
        Training::create(array_merge($request->all(), ['file' => $fileName, 'user_id' => Auth::id()]));
        return back()->with('success', 'Training Created Successful.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Training  $training
     * @return \Illuminate\Http\Response
     */
    public function show(Training $training)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Training  $training
     * @return \Illuminate\Http\Response
     */
    public function edit(Training $training)
    {
        return view('user.training_edit', compact('training'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Training  $training
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Training $training)
    {
        $this->validate($request, [
            'institute' => 'required|string|max:191',
            'subject' => 'required|string|max:191',
            'from' => 'required|date',
            'to' => 'required|date',
            'details' => 'required|string|max:65530',
            'file' => 'nullable|mimes:jpg,png,jpeg,gif,doc,docx,pdf,ppt,pptx,xls,xlsx|max:10000'
        ]);
        $fileName = FileHelper::uploadFile($request, $training);
        $training->fill(array_merge($request->all(), ['file' => $fileName]))->save();
        return back()->with('success', 'Training Updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Training  $training
     * @return \Illuminate\Http\Response
     */
    public function destroy(Training $training)
    {
        FileHelper::deleteFile($training);
        $training->delete();
        return back()->with('success', 'Training Deleted');
    }
}
