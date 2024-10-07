<?php

namespace App\Http\Controllers\User;

use App\Helpers\FileHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\JobDetailsCreateRequest;
use App\Http\Requests\JobDetailsUpdateRequest;
use App\Models\JobDetails;
use App\Models\UserJob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs = JobDetails::where('user_id', Auth::id())->latest()->get();
        $appliedJobs = UserJob::where('user_id', Auth::id())->with('jobDetails')->latest()->get();
        return view('user.jobs', compact('jobs', 'appliedJobs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.job_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(JobDetailsCreateRequest $request)
    {
        $fileName = FileHelper::uploadFile($request);
        $imageName = FileHelper::uploadImage($request);
        JobDetails::create(array_merge($request->all(), ['file' => $fileName, 'image' => $imageName, 'user_id' => Auth::id()]));
        return back()->with('success', 'Job Created Successful. Admin will review it.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JobDetails  $job
     * @return \Illuminate\Http\Response
     */
    public function show(JobDetails $job)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JobDetails  $job
     * @return \Illuminate\Http\Response
     */
    public function edit(JobDetails $job)
    {
        $job = JobDetails::where('user_id', Auth::id())->where('id', $job->id)->first();
        if ($job == NULL) {
            abort(404);
        }
        return view('user.job_edit', compact('job'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\JobDetails  $job
     * @return \Illuminate\Http\Response
     */
    public function update(JobDetailsUpdateRequest $request, JobDetails $job)
    {
        $imageName = FileHelper::uploadImage($request, $job);
        $fileName = FileHelper::uploadFile($request, $job);
        $job->fill(array_merge($request->all(), ['file' => $fileName, 'image' => $imageName]))->save();
        return back()->with('success', 'Job Details Updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JobDetails  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy(JobDetails $job)
    {
        $job = JobDetails::where('user_id', Auth::id())->where('id', $job->id)->first();
        if ($job == NULL) {
            abort(404);
        }
        FileHelper::deleteFile($job);
        FileHelper::deleteImage($job);
        $job->delete();
        return back()->with('success', 'Job Deleted');
    }

    public function apply(Request $request)
    {
        $this->validate($request, [
            'job_details_id' => 'required',
            'cover_letter' => 'required|string|max:65530',
            'file' => 'required|mimes:pdf,docx,jpg,png,jpeg|max:5000'
        ]);
         $job = JobDetails::findOrFail($request->job_details_id);
        if ($job->status != "Open") {

            return back()->with('error', 'This job is not open to apply.');
        }
        if (Auth::user()->status == 1) {
            $fileName = FileHelper::uploadFile($request);
            UserJob::create(array_merge($request->all(), ['file' => $fileName, 'user_id' => Auth::id()]));
            return back()->with('success', 'Applied Successful.');
        } else {
            return back()->with('error', 'Account is not active.');
        }
    }

    public function close(JobDetails $jobDetails)
    {
        $jobDetails->status = "Close";
        $jobDetails->save();
        return back()->with('success', 'Job Accepted');
    }
    public function applicants($id)
    {
        $userJobs = UserJob::where('job_details_id', $id)->with('user')->get();
        $requireters = UserJob::where('job_details_id', $id)->where('requrite_status', 1)->with('user')->get();
        return view('user.job_applicants', compact('userJobs', 'requireters'));
    }
}
