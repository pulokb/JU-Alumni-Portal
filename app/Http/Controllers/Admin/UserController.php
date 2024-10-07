<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\FileHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Models\Activity;
use App\Models\Club;
use App\Models\Profile;
use App\Models\Training;
use Illuminate\Http\Request;
use App\Models\User;
use Facade\FlareClient\Stacktrace\File;
use Yajra\DataTables\DataTables;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where('status', 1)->with('profile')->get();
        if (request()->ajax()) {
            if (request()->ajax()) {
                return $this->dataTable($users);
            }
        }
        return view('admin.users.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserCreateRequest $request)
    {
        // $imageName = FileHelper::uploadImage($request, NULL, array(), 50, 50);
        // $imageName = FileHelper::uploadImage($request, NULL, ['avatar', 'avatarHeight' => 50, 'avatarWidth' => 50]);
        // $imageName = FileHelper::uploadImage($request, NULL, ['avatar', 'avatarHeight' => 50, 'avatarWidth' => 50, 'big', 'bigHeight' => 600, 'bigWidth' => 1000], 300, 300);
        $password = bcrypt($request->password);
        $user = User::create(array_merge($request->all(), ['password' => $password, 'status' => 1]));
        $imageName = FileHelper::uploadImage($request);
        $fileName = FileHelper::uploadFile($request);
        Profile::create(array_merge($request->all(), ['user_id' => $user->id, 'image' => $imageName, 'file' => $fileName]));
        return back()->with('success', 'Successfully Created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('admin.users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request, User $user)
    {
        $imageName = FileHelper::uploadImage($request, $user->profile);
        $fileName = FileHelper::uploadFile($request, $user->profile);
        $user->fill($request->all())->save();
        $user->profile->fill(array_merge($request->all(), ['image' => $imageName, 'file' => $fileName]))->save();
        return back()->with('success', 'Update Successful.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        FileHelper::deleteImage($user->profile);
        FileHelper::deleteFile($user->profile);
        $user->delete();
    }
    public function accountCreate()
    {
        return view('admin.users.account_create');
    }

    public function accountStore(Request $request)
    {
        $this->validate($request, [
            'name' => ['required', 'string', 'max:191'],
            'email' => ['required', 'string', 'email', 'max:191', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        $password = bcrypt($request->password);
        User::create(array_merge($request->all(), ['password' => $password, 'status' => 0]));
        return back()->with('success', 'Successfully Created.');
    }

    public function requests()
    {
        $users = User::where('status', 0)->with('profile')->get();

        if (request()->ajax()) {
            return $this->dataTable($users);
        }
        return view('admin.users.requests');
    }

    public function dataTable($users)
    {
        return DataTables::of($users)
            ->addIndexColumn()
            ->addColumn('phone', function (User $user) {
                return $user->profile->phone ?? '';
            })
            ->addColumn('department', function (User $user) {
                return $user->profile->department ?? '';
            })
            ->addColumn('batch', function (User $user) {
                return $user->profile->batch ?? '';
            })
            ->addColumn('student_id', function (User $user) {
                return $user->profile->student_id ?? '';
            })
            ->addColumn('student_type', function (User $user) {
                return $user->profile->student_type ?? '';
            })
            ->addColumn('action', function (User $user) {
                $accept = "";
                if ($user->status == 0) {
                    $accept = '<a class="btn-sm btn-transition btn btn-outline-success"  onclick="return (confirm(\'Are you sure?\'))" href="' . route('admin.users.accept', $user->id) . '" >Accept</a><br>';
                }
                return
                    $accept .
                    "<div class='dropdown show'>
                    <a class='btn btn-primary dropdown-toggle' href='#' role='button' id='dropdownMenuLink' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                        View Profile
                    </a>
                    <div class='dropdown-menu' aria-labelledby='dropdownMenuLink'>
                        <a class='dropdown-item' target='_blank' href='" . route('admin.users.show', $user->id) . "'>Personal Info</a>
                        <a class='dropdown-item' target='_blank' href='" . route('admin.users.activity', $user->id) . "'>Activity Info</a>
                        <a class='dropdown-item' target='_blank' href='" . route('admin.users.training', $user->id) . "'>Training Info</a>
                        <a class='dropdown-item' target='_blank' href='" . route('admin.users.club', $user->id) . "'>Club Info</a>
                    </div>" .
                    // "<a class='border-0 btn-sm btn-transition btn btn-outline-primary' href='" . route('admin.users.show', $user->id) . "'>View</a> <br> " .
                    "<br><a class='border-0 btn-sm btn-transition btn btn-outline-info' href='" . route('admin.users.edit', $user->id) . "'>Edit</a>  <br> " .
                    ' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $user->id . '" data-original-title="" class="border-0 btn-sm btn-transition btn btn-outline-danger delete">Delete</a>';

                //     '<a style="color:red"  onclick="if (confirm(\'Are you sure to delete?\')){document.getElementById(\'delete-form' . $user->id . '\').submit();}else{event.preventDefault()}" href="#" >Delete</a>

                //  <form id="delete-form' . $user->id . '" action="' . route('admin.user.destroy', $user->id) . '" method="POST" style="display: none;"> "' . method_field('DELETE') . '" "' . csrf_field() . '"  </form>';
            })
            ->rawColumns(['action', 'image'])
            ->make(true);
    }

    public function accept(User $user)
    {
        $user->status = 1;
        $user->save();
        return back()->with('success', 'Accepted');
    }

    public function activity($id)
    {
        $user = User::where('id', $id)->with('activities')->first();
        return view('admin.users.activities', compact('user'));
    }
    public function activityDestroy($id)
    {
        $activity = Activity::findOrFail($id);
        FileHelper::deleteFile($activity);
        $activity->delete();
        return back()->with('success', 'Activity Deleted.');
    }
    public function training($id)
    {
        $user = User::where('id', $id)->with('trainings')->first();
        return view('admin.users.trainings', compact('user'));
    }
    public function trainingDestroy($id)
    {
        $training = Training::findOrFail($id);
        FileHelper::deleteFile($training);
        $training->delete();
        return back()->with('success', 'Training Deleted.');
    }
    public function club($id)
    {
        $user = User::where('id', $id)->with('clubs')->first();
        return view('admin.users.clubs', compact('user'));
    }
    public function clubDestroy($id)
    {
        $club = Club::findOrFail($id);
        FileHelper::deleteFile($club);
        $club->delete();
        return back()->with('success', 'Club Deleted.');
    }
}
