<?php

namespace App\Http\Controllers\User;

use App\Helpers\FileHelper;
use App\Http\Controllers\Controller;
use App\Models\Club;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClubController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clubs = Club::where('user_id', Auth::id())->latest()->get();
        return view('user.clubs', compact('clubs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.club_create');
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
            'name' => 'required|string|max:191',
            'designation' => 'required|string|max:191',
            'member_since' => 'required|date',
            'details' => 'required|string|max:65530',
            'file' => 'nullable|mimes:jpg,png,jpeg,gif,doc,docx,pdf,ppt,pptx,xls,xlsx|max:10000'
        ]);

        $fileName = FileHelper::uploadFile($request);
        Club::create(array_merge($request->all(), ['file' => $fileName, 'user_id' => Auth::id()]));
        return back()->with('success', 'Club Created Successful.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Club  $club
     * @return \Illuminate\Http\Response
     */
    public function show(Club $club)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Club  $club
     * @return \Illuminate\Http\Response
     */
    public function edit(Club $club)
    {
        return view('user.club_edit', compact('club'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Club  $club
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Club $club)
    {
        $this->validate($request, [
            'name' => 'required|string|max:191',
            'designation' => 'required|string|max:191',
            'member_since' => 'required|date',
            'details' => 'required|string|max:65530',
            'file' => 'nullable|mimes:jpg,png,jpeg,gif,doc,docx,pdf,ppt,pptx,xls,xlsx|max:10000'
        ]);
        $fileName = FileHelper::uploadFile($request, $club);
        $club->fill(array_merge($request->all(), ['file' => $fileName]))->save();
        return back()->with('success', 'Club Updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Club  $club
     * @return \Illuminate\Http\Response
     */
    public function destroy(Club $club)
    {
        FileHelper::deleteFile($club);
        $club->delete();
        return back()->with('success', 'Club Deleted');
    }
}
