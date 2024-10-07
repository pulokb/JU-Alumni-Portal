@extends('layouts.admin')
@section('title','Update Admin')
@section('content')<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header">
                <h5 class="card-title text-primary">Update Admin </h5><br>
            </div>
            <div class="card-body">
                <form id="add-account" class="form-group" action="{{route('admin.admins.update',$admin->id)}}"
                    method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Name</label>
                        <input value="{{$admin->name}}" type="text" class="form-control" name="name" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input disabled value="{{$admin->email}}" type="email" class="form-control" name="email">
                    </div>
                   <div class="form-footer pt-4 pt-2 mt-4 border-top">
                        <button type="submit" class="btn btn-primary">
                            <i class=" mdi mdi-checkbox-marked-outline mr-1"></i> Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection