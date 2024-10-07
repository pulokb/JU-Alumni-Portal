<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\ContactFeedback;
use App\Models\Gallery;
use App\Models\JobDetails;
use App\Models\Profile;
use App\Models\Scholarship;
use App\Models\Seminar;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $seminars = Seminar::where('seminar_date', '>=', today())->get();
        $jobs = JobDetails::latest()->where('status', 'Open')->take(6)->get();
        $scholarship = Scholarship::latest()->where('status',1)->first();
        $blogs = Blog::where('status',1)->latest()->take(3)->get();
        $countAlumni = Profile::where('student_type', 'Alumni')->count();
        $countGallery = Gallery::count();
        $countSeminar = Seminar::count();
        $countJobDetails = JobDetails::count();
        return view('frontend.index', compact(
            'seminars',
            'jobs',
            'countAlumni',
            'countGallery',
            'countSeminar',
            'countJobDetails',
            'scholarship',
            'blogs'
        ));
    }

    // public function termsAndConditions()
    // {
    //     return view('frontend.terms_and_conditions');
    // }

    // public function privacyPolicy()
    // {
    //     return view('frontend.privacy_policy');
    // }

    public function about()
    {
        return view('frontend.about');
    }
    public function contact()
    {
        return view('frontend.contact');
    }
    public function feedback()
    {
        return view('frontend.feedback');
    }
    public function galleries()
    {
        $galleries = Gallery::latest();
        return view('frontend.galleries', compact('galleries'));
    }
    public function submitFeedback(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:191',
            'email' => 'required|string|email|max:191',
            'phone' => 'nullable|string|max:191',
            'message' => 'nullable|string|max:65500',
            'feedback' => 'nullable|integer'
        ]);
        $feedback = new ContactFeedback();
        $feedback->name = $request->name;
        $feedback->email = $request->email;
        $feedback->phone = $request->phone;
        $feedback->message = $request->message;
        $feedback->feedback = $request->feedback;
        $feedback->save();
        return back()->with('success', 'Thank you for cantacting us. We will contact you soon.');
    }
}
