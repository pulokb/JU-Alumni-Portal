@extends('layouts.frontend')
@section('title','Zoom Meeting')
@section('content')
@include('includes.banner',['title'=>'Zoom Meeting','details'=>'This is a page. This is a demo paragraph.This is
a demo
senten.'])
<section id="page-content-wrap">
    <div class="register-page-wrapper section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <a href="{{route('user.zooms.create')}}" class="btn btn-brand about-btn ">Create Zoom Meeting</a>
                </div>
            </div><br>
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="" class="table table-striped table-hover table-bordered" style="width:100%;">
                                    <thead>
                                        <tr>
                                            <th>Sl.</th>
                                            <th>Title</th>
                                            <th>Created By</th>
                                            <th>Details</th>
                                            <th>Start Time</th>
                                            <th>Url</th>
                                            <th>Meeting Id</th>
                                            <th>Meeting Password</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($zooms as $zoom)
                                        <tr>
                                            <td>{{$loop->index+1}}</td>
                                            <td>{{$zoom->title}}</td>
                                            <td>{{$zoom->user->name}}</td>
                                            <td>{{$zoom->details}}</td>
                                            {{-- <td>{{\Carbon\Carbon::parse($zoom->start_time)}}</td> --}}
                                            <td>{{date('d-M-Y h:i a',strtotime($zoom->start_time))}}</td>
                                            <td><a href="{{$zoom->meeting_url}}"
                                                target="_blank">{{$zoom->meeting_url}}</a></td>
                                                <td>{{$zoom->meeting_id}}</td>
                                                <td>{{$zoom->meeting_password}}</td>

                                            <td>
                                                {{-- <a href="{{route('user.zooms.show',$zoom->id)}}"> <button
                                                    class="border-0 btn-transition btn btn-outline-primary">View</button></a>
                                                <a href="{{route('user.zooms.edit',$zoom->id)}}"> <button
                                                        class="border-0 btn-transition btn btn-outline-info">Edit</button></a>
                                                --}}

                                                @if($zoom->user_id == Auth::id())
                                                <a class="border-0 btn-transition btn btn-danger" href="#"
                                                    onclick="if (confirm('Are you sure to delete?')){document.getElementById('delete-form-{{$zoom->id}}').submit();}else{event.preventDefault()}">
                                                    Delete</a>
                                                <form id="delete-form-{{$zoom->id}}"
                                                    action="{{ route('user.zooms.destroy',$zoom->id) }}" method="POST"
                                                    style="display: none;">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                                @endif
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
@endsection