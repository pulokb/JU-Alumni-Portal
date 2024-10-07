<!-- Title Field -->
<div class="form-group">
    <b>{!! Form::label('title', 'Title:') !!}</b>
    <p>{{ $seminar->title }}</p>
</div>

<!-- Details Field -->
<div class="form-group">
    <b>{!! Form::label('details', 'Details:') !!}</b>
    <p>{!! $seminar->details !!}</p>
</div>

<!-- Seminar Date Field -->
<div class="form-group">
    <b>{!! Form::label('seminar_date', 'Seminar Date:') !!}</b>
    <p>{{ $seminar->seminar_date }}</p>
</div>

<!-- Seminar Time Field -->
<div class="form-group">
    <b>{!! Form::label('seminar_time', 'Seminar Time:') !!}</b>
    <p>{{ $seminar->seminar_time }}</p>
</div>

<!-- Place Field -->
<div class="form-group">
    <b>{!! Form::label('place', 'Place:') !!}</b>
    <p>{{ $seminar->place }}</p>
</div>

<!-- Image Field -->
<div class="form-group">
    <b>{!! Form::label('image', 'Image:') !!}</b>
    <img src="{{asset('images/'.$seminar->image)}}" alt="" srcset="">
</div>

<!-- Created At Field -->
<div class="form-group">
    <b>{!! Form::label('created_at', 'Created At:') !!}</b>
    <p>{{ $seminar->created_at->toFormattedDateString() }}</p>
</div>


