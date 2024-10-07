@extends('layouts.admin')
@section('title','Create New Admin')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header">

                <h5 class="card-title text-primary">Create New Admin </h5><br>
            </div>
            <div class="card-body">
                <form action="{{route('admin.admins.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Name</label>
                        <input value="{{old('name')}}" type="text" class="form-control" name="name" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input value="{{old('email')}}" type="email" class="form-control" name="email" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" minlength="8" required>
                    </div>
                    <div class="form-group">
                        <label>Confirm Password</label>
                        <input type="password" class="form-control" name="password_confirmation" required>
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
{{-- @extends('layouts.admin')
@section('title','Create New User')
@section('content')
<div class="app-main__inner">
    <div class="tab-content">
        <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Create New User </h5><br>
                            {!! Form::open(['route' => 'admin.admin.store']) !!}
                            <!-- Title Field -->
                            <div class="form-group col-md-12">
                                {!! Form::label('title', 'Title:') !!}
                                {!! Form::text('title', null, ['class' => 'form-control']) !!}
                            </div>

                            <!-- Submit Field -->
                            <div class="form-group col-sm-12">
                                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                                <a href="{{ route('admin.admin.index') }}" class="btn btn-default">Cancel</a>
</div>

{!! Form::close() !!}
</div>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection --}}