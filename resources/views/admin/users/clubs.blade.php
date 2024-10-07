@extends('layouts.admin')
@section('title','Clubs')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header">
                <h5 class="card-title text-primary">Clubs</h5><br>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="" class="table table-striped table-hover table-bordered" style="width:100%;">
                        <thead>
                            <tr>
                                <th>Sl.</th>
                                <th>Name</th>
                                <th>Details</th>
                                <th>Designation</th>
                                <th>Member Since</th>
                                <th>File</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($user->clubs)>0)

                            @foreach ($user->clubs as $club)
                            <tr>
                                <td>{{$loop->index+1}}</td>
                                <td>{{$club->name}}</td>
                                <td>{{$club->details}}</td>
                                <td>{{$club->designation}}</td>
                                <td>{{date('d-M-Y',strtotime($club->member_since))}}</td>
                                <td>@if ($club->file)
                                    <a href="{{asset('files/'.$club->file)}}">Download</a></td>
                                @else
                                No File Found
                                @endif


                                <td>
                                    <a class="border-0 btn-transition btn btn-outline-danger" href="#"
                                        onclick="if (confirm('Are you sure to delete?')){document.getElementById('delete-form-{{$club->id}}').submit();}else{event.preventDefault()}">
                                        Delete</a>
                                    <form id="delete-form-{{$club->id}}"
                                        action="{{ route('admin.userClub.destroy',$club->id) }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>No Club Details Found</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection