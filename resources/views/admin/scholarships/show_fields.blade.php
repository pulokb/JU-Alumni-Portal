<!-- Title Field -->
<div class="form-group">
    <b>{!! Form::label('title', 'Title:') !!}</b>
    <p>{{ $scholarship->title }}</p>
</div>

<!-- Details Field -->
<div class="form-group">
    <b>{!! Form::label('details', 'Details:') !!}</b>
    <p>{!! $scholarship->details !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    <b>{!! Form::label('created_at', 'Created At:') !!}</b>
    <p>{{ $scholarship->created_at->toFormattedDateString() }}</p>
</div>

