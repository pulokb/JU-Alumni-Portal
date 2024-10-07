<!-- Title Field -->
<div class="form-group">
    <b>{!! Form::label('title', 'Title:') !!}</b>
    <p>{{ $jobDetails->title }}</p>
</div>

<!-- Details Field -->
<div class="form-group">
    <b>{!! Form::label('details', 'Details:') !!}</b>
    <p>{{ $jobDetails->details }}</p>
</div>

<!-- Image Field -->
<div class="form-group">
    <b>{!! Form::label('image', 'Image:') !!}</b>
    <img src="{{asset('images/'.$jobDetails->image)}}" alt="" srcset="">
</div>

<!-- File Field -->
<div class="form-group">
    <b>{!! Form::label('file', 'File:') !!}</b>
    <a download href="{{asset('files/'.$jobDetails->file)}}">Download</a>
</div>

<!-- Created At Field -->
<div class="form-group">
    <b>{!! Form::label('created_at', 'Created At:') !!}</b>
    <p>{{ $jobDetails->created_at->toFormattedDateString() }}</p>
</div>

