<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\ContactFeedback;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;
use Yajra\DataTables\DataTables;
use App\Http\Requests\AdminCreateRequest;
use App\Http\Requests\AdminUpdateRequest;
use App\Models\AppointmentSchedule;
use App\Models\Doctor;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('superAdmin');
    }
    public function index()
    {
        $admins = Admin::where('super_admin', 0)->get();
        return view('admin.admins.index', compact('admins'));
    }


    public function create()
    {
        return view('admin.admins.create');
    }


    public function store(AdminCreateRequest $request)
    {
        $password = bcrypt($request->password);
        Admin::create(array_merge($request->all(), ['password' => $password]));
        return back()->with('success', 'Successfully Created');
    }


    public function show(Admin $admin)
    {
        return view('admin.admins.show', compact('admin'));
    }


    public function edit(Admin $admin)
    {
        return view('admin.admins.edit', compact('admin'));
    }


    public function update(Admin $admin, AdminUpdateRequest $request)
    {

        $admin->fill($request->all());
        $admin->save();
        return back()->with('success', 'Successfully Updated.');
    }


    public function destroy(Admin $admin)
    {
        $admin->delete();
        return back()->with('success', 'Successfully Deleted.');
    }
}
