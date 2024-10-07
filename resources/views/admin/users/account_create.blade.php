@extends('layouts.admin')
@section('title','Create Student Account')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header">
                <h5 class="card-title text-primary">Create Student Account</h5><br>
            </div>
            <div class="card-body">
                <form data-parsley-validate enctype="multipart/form-data" class=""
                    action="{{route('admin.userAccount.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Name*</label>
                        <input type="text" value="{{old('name')}}" name="name" class="form-control"
                            laceholder="Enter Name">
                    </div>
                    <div class="form-group">
                        <label>Email address*</label>
                        <input value="{{old('name')}}" name="email" required type="email" class="form-control"
                            laceholder="Enter Email">
                    </div>

                    <div class="form-group">
                        <label>Password*</label>
                        <input value="{{old('name')}}" required name="password" minlength="8" type="password" class="form-control"
                            laceholder="Enter Password">
                    </div>
                    <div class="form-group">
                        <label>Confirm Password*</label>
                        <input value="{{old('name')}}" required name="password_confirmation" minlength="8" type="password" class="form-control"
                            laceholder="ConfirmPassword">
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