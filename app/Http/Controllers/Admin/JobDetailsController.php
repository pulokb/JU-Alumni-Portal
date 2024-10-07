<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\JobDetailsDataTable;
use App\Http\Requests;
use App\Helpers\FileHelper;
use App\Http\Requests\JobDetailsCreateRequest;
use App\Http\Requests\JobDetailsUpdateRequest;
use App\Models\JobDetails;
use App\Http\Controllers\AppBaseController;
use App\Models\UserJob;
use Session;

class JobDetailsController extends AppBaseController
{

    public function index(JobDetailsDataTable $jobDetailsDataTable)
    {
        if (request()->ajax()) {
            return $jobDetailsDataTable->dataTableValue();
        }
        $dataTable = $jobDetailsDataTable->html();
        return  view('admin.job_details.index', compact('dataTable'));
    }


    public function create()
    {
        return view('admin.job_details.create');
    }


    public function store(JobDetailsCreateRequest $request)
    {
        $input = $request->all();

        // JobDetails::create($input);  
        $imageName = FileHelper::uploadImage($request);
        $fileName = FileHelper::uploadFile($request);
        JobDetails::create(array_merge($request->all(), ['image' => $imageName, 'file' => $fileName, 'status' => 'Open']));

        return back()->with('success', 'Job Details saved successfully.');
    }


    public function show($id)
    {
        $jobDetails = JobDetails::find($id);

        if (empty($jobDetails)) {
            Session::flash('error', 'Job Details not found');

            return redirect(route('admin.jobDetails.index'));
        }

        return view('admin.job_details.show')->with('jobDetails', $jobDetails);
    }


    public function edit($id)
    {
        $jobDetails = JobDetails::find($id);

        if (empty($jobDetails)) {
            Session::flash('error', 'Job Details not found');

            return redirect(route('admin.jobDetails.index'));
        }

        return view('admin.job_details.edit')->with('jobDetails', $jobDetails);
    }


    public function update($id, JobDetailsUpdateRequest $request)
    {
        $jobDetails = JobDetails::find($id);

        if (empty($jobDetails)) {
            Session::flash('error', 'Job Details not found');

            return redirect(route('admin.jobDetails.index'));
        }

        $imageName = FileHelper::uploadImage($request, $jobDetails);
        $fileName = FileHelper::uploadFile($request, $jobDetails);
        $jobDetails->fill(array_merge($request->all(), ['image' => $imageName, 'file' => $fileName]));
        $jobDetails->save();

        Session::flash('success', 'Job Details updated successfully.');

        return redirect(route('admin.jobDetails.index'));
    }


    public function destroy($id)
    {
        $jobDetails = JobDetails::findOrFail($id);
        FileHelper::deleteImage($jobDetails);
        FileHelper::deleteFile($jobDetails);
        $jobDetails->delete();
    }

    public function requests(JobDetailsDataTable $jobDetailsDataTable)
    {
        if (request()->ajax()) {
            return $jobDetailsDataTable->requestDataTableValue();
        }
        $dataTable = $jobDetailsDataTable->html();
        return  view('admin.job_details.requests', compact('dataTable'));
    }

    public function accept(JobDetails $jobDetails)
    {
        $jobDetails->status = "Open";
        $jobDetails->save();
        return back()->with('success', 'Job Accepted');
    }
    public function applicants($id)
    {
        $userJobs = UserJob::where('job_details_id', $id)->with('user')->get();
        $requireters = UserJob::where('job_details_id', $id)->where('requrite_status', 1)->with('user')->get();
        return view('admin.job_details.applicants', compact('userJobs', 'requireters'));
    }
}
