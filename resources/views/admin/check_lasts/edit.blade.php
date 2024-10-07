@extends('layouts.admin')
@section('title')Update  Check Last @endsection
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header">
                <h5 class="card-title text-primary"> Update  Check Last</h5><br>
            </div>
            <div class="card-body">
                   {!! Form::model($checkLast, ['route' => ['admin.checkLasts.update', $checkLast->id], 'method' => 'patch']) !!}

                        @include('admin.check_lasts.fields')

                   {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection
