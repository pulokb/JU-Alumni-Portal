@extends('layouts.admin')
@section('title')Update  Scholarship @endsection
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header">
                <h5 class="card-title text-primary"> Update  Scholarship</h5><br>
            </div>
            <div class="card-body">
                   {!! Form::model($scholarship, ['route' => ['admin.scholarships.update', $scholarship->id], 'method' => 'patch']) !!}

                        @include('admin.scholarships.fields')

                   {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection
