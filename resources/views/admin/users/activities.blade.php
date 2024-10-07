@extends('layouts.admin')
@section('title','Activities')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header">
                <h5 class="card-title text-primary">Activities</h5><br>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="" class="table table-striped table-hover table-bordered" style="width:100%;">
                        <thead>
                            <tr>
                                <th>Sl.</th>
                                <th>Title</th>
                                <th>Details</th>
                                <th>File</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($user->activities)>0)
                                
                            @foreach ($user->activities as $activity)
                            <tr>
                                <td>{{$loop->index+1}}</td>
                                <td>{{$activity->title}}</td>
                                <td>{{$activity->details}}</td>
                                <td>@if ($activity->file)
                                    <a href="{{asset('files/'.$activity->file)}}">Download</a></td>
                                    @else
                                    No File Found
                                    @endif
                                    

                                <td>
                                    <a class="border-0 btn-transition btn btn-outline-danger" href="#"
                                        onclick="if (confirm('Are you sure to delete?')){document.getElementById('delete-form-{{$activity->id}}').submit();}else{event.preventDefault()}">
                                        Delete</a>
                                    <form id="delete-form-{{$activity->id}}"
                                        action="{{ route('admin.userActivity.destroy',$activity->id) }}" method="POST"
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
                                <td>No Activity Found</td>
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