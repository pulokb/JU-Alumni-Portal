@extends('layouts.admin')
@section('title','Create Zoom Meeting')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header">

                <h5 class="card-title text-primary">Create Zoom Meeting </h5><br>
            </div>
            <div class="card-body">
                <form action="{{route('admin.zooms.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Meeting Title</label>
                        <input value="{{old('title')}}" type="text" class="form-control" name="title" required>
                    </div>
                    <div class="form-group">
                        <label>Details</label>
                        <textarea rows="5" name="details" class="form-control">{{old('details')}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Meeting Date and Time</label>
                        <input type="datetime-local" value="{{old('start_time')}}" class="form-control" name="start_time"
                            minlength="8" required>
                    </div>
                    <div class="form-group">
                        <label>Meeting Password</label>
                        <input type="text" class="form-control" value="{{old('meeting_password')}}"
                            name="meeting_password" required>
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