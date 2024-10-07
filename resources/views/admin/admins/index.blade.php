@extends('layouts.admin')
@section('title','Manage Admin')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header">
                <h5 class="card-title text-primary">Manage Admin </h5><br>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="" class="table table-striped table-hover table-bordered" style="width:100%;">
                        <thead>
                            <tr>
                                <th>Sl.</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($admins as $admin)
                            <tr>
                                <td>{{$loop->index+1}}</td>
                                <td>{{$admin->name}}</td>
                                <td>{{$admin->email}}</td>

                                <td>
                                    <a href="{{route('admin.admins.show',$admin->id)}}"> <button
                                            class="border-0 btn-transition btn btn-outline-primary">View</button></a>
                                    <a href="{{route('admin.admins.edit',$admin->id)}}"> <button
                                            class="border-0 btn-transition btn btn-outline-info">Edit</button></a>

                                    <a class="border-0 btn-transition btn btn-outline-danger" href="#"
                                        onclick="if (confirm('Are you sure to delete?')){document.getElementById('delete-form-{{$admin->id}}').submit();}else{event.preventDefault()}">
                                        Delete</a>
                                    <form id="delete-form-{{$admin->id}}"
                                        action="{{ route('admin.admins.destroy',$admin->id) }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>
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
@endsection