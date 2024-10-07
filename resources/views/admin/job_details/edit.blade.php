@extends('layouts.admin')
@section('title')Update  Job Details @endsection
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header">
                <h5 class="card-title text-primary"> Update  Job Details</h5><br>
            </div>
            <div class="card-body">
                   {!! Form::model($jobDetails, ['route' => ['admin.jobDetails.update', $jobDetails->id], 'method' => 'patch', 'files' => true]) !!}

                        @include('admin.job_details.fields')

                   {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection
@include('includes.ckeditor')
