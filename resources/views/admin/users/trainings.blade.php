@extends('layouts.admin')
@section('title','Training')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header">
                <h5 class="card-title text-primary">Training</h5><br>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="" class="table table-striped table-hover table-bordered" style="width:100%;">
                        <thead>
                            <tr>
                                <th>Sl.</th>
                                <th>Institute</th>
                                <th>Subject</th>
                                <th>Details</th>
                                <th>From</th>
                                <th>To</th>
                                <th>File</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($user->trainings)>0)

                            @foreach ($user->trainings as $training)
                            <tr>
                                <td>{{$loop->index+1}}</td>
                                <td>{{$training->institute}}</td>
                                <td>{{$training->subject}}</td>
                                <td>{{$training->details}}</td>
                                <td>{{date('d-M-Y',strtotime($training->from))}}</td>
                                <td>{{date('d-M-Y',strtotime($training->to))}}</td>
                                <td>@if ($training->file)
                                    <a href="{{asset('files/'.$training->file)}}">Download</a></td>
                                @else
                                No File Found
                                @endif


                                <td>
                                    <a class="border-0 btn-transition btn btn-outline-danger" href="#"
                                        onclick="if (confirm('Are you sure to delete?')){document.getElementById('delete-form-{{$training->id}}').submit();}else{event.preventDefault()}">
                                        Delete</a>
                                    <form id="delete-form-{{$training->id}}"
                                        action="{{ route('admin.userTraining.destroy',$training->id) }}" method="POST"
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
                                <td></td>
                                <td>No Activity Found</td>
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