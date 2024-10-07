<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control','maxlength' => 191,'required'=>'true'],) !!}
</div>

<!-- Details Field -->
<div class="form-group">
    {!! Form::label('details', 'Details:') !!}
    {!! Form::textarea('details', null, ['class' => 'form-control','maxlength' => 65530,'required'=>'true']) !!}
</div>

<!-- Image Field -->
@isset($jobDetails)
<img src="{{asset('images/'.$jobDetails->image)}}" alt="" srcset="">
@endisset
<div class="form-group">
    <br>
    {!! Form::label('image', 'Image:') !!}
    {!! Form::file('image')!!}
</div>
<div class="clearfix"></div>

<!-- File Field -->
@isset($jobDetails)
@if($jobDetails->file)
<a download href="{{asset('files/'.$jobDetails->file)}}">Download</a>
@endif
@endisset
<div class="form-group">
    <br>
    {!! Form::label('file', 'File:') !!}
    {!! Form::file('file') !!}
</div>
<div class="clearfix"></div>

<!-- Submit Field -->
<div class="form-group">
    {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('admin.jobDetails.index') }}" class="border-0 btn-transition btn btn-outline-info">Cancel</a>
</div>