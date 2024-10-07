@extends('layouts.admin')
@section('title')Job Details @endsection
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header">
                <h5 class="card-title text-primary">Manage Job Details </h5><br>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    @include('admin.job_details.table')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

