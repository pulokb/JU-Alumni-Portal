@extends('layouts.admin')
@section('title')Create Seminar @endsection
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header">
                <h5 class="card-title text-primary"> Create Seminar</h5><br>
            </div>
            <div class="card-body">
                    {!! Form::open(['route' => 'admin.seminars.store', 'files' => true]) !!}

                        @include('admin.seminars.fields')

                    {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection
