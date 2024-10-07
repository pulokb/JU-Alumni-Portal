@extends('layouts.admin')
@section('title')View  Job Details Details @endsection
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header">
                <h5 class="card-title text-primary"> View  Job Details Details</h5><br>
            </div>
            <div class="card-body">
                    @include('admin.job_details.show_fields')
                    <a href="{{ route('admin.jobDetails.index') }}" class="btn-transition btn btn-outline-info">Back</a>
            </div>
        </div>
    </div>
</div>
@endsection
