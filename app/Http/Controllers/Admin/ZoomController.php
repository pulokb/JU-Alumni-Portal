<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ZoomCreateRequest;
use App\Models\Zoom;
use App\Traits\ZoomJWT;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

use Exception;
use GuzzleHttp\Client;
use Auth;

class ZoomController extends Controller
{
    use ZoomJWT;

    const MEETING_TYPE_INSTANT = 1;
    const MEETING_TYPE_SCHEDULE = 2;
    const MEETING_TYPE_RECURRING = 3;
    const MEETING_TYPE_FIXED_RECURRING_FIXED = 8;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $zooms = Zoom::with('user')->get();
        if (request()->ajax()) {
            return DataTables::of($zooms)
                ->addIndexColumn()
                ->addColumn('created_by', function (Zoom $zoom) {
                    return  $zoom->user->name ?? 'admin';
                })
                ->addColumn('meeting_url', function (Zoom $zoom) {
                    return  "<a target='_blank' href='". $zoom->meeting_url."'>".$zoom->meeting_url."</a>";
                })
                ->addColumn('action', function (Zoom $zoom) {
                    return
                        ' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $zoom->id . '" data-original-title="Delete" class="border-0 btn-sm btn-transition btn btn-outline-danger delete">Delete</a>';
                })
                ->rawColumns(['action', 'image', 'details','meeting_url'])
                ->make(true);
        }
        return view('admin.zooms.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.zooms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ZoomCreateRequest $request)
    {
        // return $request->all();
        $client = new Client(['base_uri' => 'https://api.zoom.us']);

        $accessToken = $this->generateZoomToken();

        try {
            $response = $client->request('POST', '/v2/users/me/meetings', [
                "headers" => [
                    "Authorization" => "Bearer $accessToken"
                ],
                'json' => [
                    "topic" => $request->title,
                    "type" => 2,
                    "start_time" => $request->date,
                    "duration" => "30", // 30 mins
                    "password" => $request->meeting_password,
                ],
            ]);

            $data = json_decode($response->getBody());
            $zoom = new Zoom();
            $zoom->title = $request->title;
            $zoom->details = $request->details;
            $zoom->start_time = $request->start_time;
            $zoom->meeting_password = $request->meeting_password;
            $zoom->meeting_id = $data->id;
            $zoom->meeting_url = $data->join_url;
            $zoom->save();
            return back()->with('success', 'Meeting Created Successful.');
        } catch (Exception $e) {
            return  back()->with('error', 'Something Wrong.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Zoom  $zoom
     * @return \Illuminate\Http\Response
     */
    public function show(Zoom $zoom)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Zoom  $zoom
     * @return \Illuminate\Http\Response
     */
    public function edit(Zoom $zoom)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Zoom  $zoom
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Zoom $zoom)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Zoom  $zoom
     * @return \Illuminate\Http\Response
     */
    public function destroy(Zoom $zoom)
    {
        $client = new Client(['base_uri' => 'https://api.zoom.us']);
        $accessToken = $this->generateZoomToken();
        $meetingId = $zoom->meeting_id;
        $response = $client->request('DELETE', '/v2/meetings/' . $meetingId, [
            "headers" => [
                "Authorization" => "Bearer $accessToken"
            ]
        ]);
        $zoom->delete();
        // return back()->with('success', 'Delete Successful.');
    }
}
