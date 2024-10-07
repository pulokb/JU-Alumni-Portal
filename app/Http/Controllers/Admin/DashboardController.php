<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\CommonHelper;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Blog;
use App\Models\ContactFeedback;
use App\Models\JobDetails;
use App\Models\Seminar;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;
use Yajra\DataTables\DataTables;


class DashboardController extends Controller
{
    public function dashboard()
    {
        $users = User::count();
        $requestUsers = User::where('status', 0)->count();
        $requestJobs = JobDetails::where('status', 'request')->count();
        $jobs = JobDetails::count();
        $seminars = Seminar::count();
        $requestBlogs = Blog::where('status', 0)->count();
        return view('admin.dashboard', compact(
            'users',
            'jobs',
            'seminars',
            'requestUsers',
            'requestJobs',
            'requestBlogs'
        ));
    }

    public function changePasswordView()
    {
        return view('admin.change_password');
    }

    public function changePassword(Request $request)
    {
        $message = CommonHelper::changePassword($request, "Admin");
        return back()->with('success', $message);
    }

    public function contacts(Request $request)
    {
        $contactFeedbacks = ContactFeedback::whereNotNull('phone')->get();
        if ($request->ajax()) {
            return DataTables::of($contactFeedbacks)
                ->addIndexColumn()
                ->addColumn('created_at', function (ContactFeedback $contactFeedbacks) {
                    return $contactFeedbacks->created_at->toFormattedDateString();
                })
                ->addColumn('action', function (ContactFeedback $contactFeedbacks) {
                    return '<a class="btn btn-danger btn-sm delete" data-original-title="Delete" data-toggle="tooltip"  data-id="' . $contactFeedbacks->id . '"  href="javascript:void(0)">Delete</a> ';
                    // return '<a class="btn btn-danger btn-sm delete"  data-id="' . $contactFeedbacks->id . '"  onclick="return confirm(\'Are you sure?\')" href="' . route('admin.contact-feedback.delete', $contactFeedbacks->id) . '">Delete</a> ';
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.contacts');
    }

    public function feedbacks(Request $request)
    {
        $contactFeedbacks = ContactFeedback::whereNull('phone')->get();
        if ($request->ajax()) {
            return DataTables::of($contactFeedbacks)
                ->addIndexColumn()
                ->addColumn('created_at', function (ContactFeedback $contactFeedbacks) {
                    return $contactFeedbacks->created_at->toFormattedDateString();
                })
                ->addColumn('action', function (ContactFeedback $contactFeedbacks) {
                    return '<a class="btn btn-danger btn-sm delete" data-original-title="Delete" data-toggle="tooltip"  data-id="' . $contactFeedbacks->id . '"  href="javascript:void(0)">Delete</a> ';
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        $averageFeedback = ContactFeedback::avg('feedback');
        $averageFeedback = round($averageFeedback, 2);
        return view('admin.feedbacks', compact('averageFeedback'));
    }

    public function contactFeedbackDelete(ContactFeedback $contactFeedback)
    {
        $contactFeedback->delete();
    }
}
