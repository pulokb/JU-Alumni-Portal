@extends('layouts.admin')
@section('title','Requests Blog')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header">
                <h5 class="card-title text-primary">Requests Blog </h5><br>

            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="data-table" class="table table-bordered table-hover table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th> SL. </th>
                                <th> Title </th>
                                <th> Details </th>
                                <th> Posted By </th>
                                <th> Image </th>
                                <th> Action </th>
                            </tr>
                        </thead>
                        {{-- <tbody>
                            @foreach ($blogs as $blog)
                            <tr>
                                <td>{{$loop->index+1}}</td>
                        <td>{{Str::limit($blog->title,50)}}</td>
                        <td>{!!Str::limit($blog->details,50)!!}</td>
                        <td>{{Str::limit($blog->tags,25)}}</td>
                        <td>{{$blog->posted_by}}</td>
                        <td><img src="{{asset('images/avatar-'.$blog->image)}}" alt=""></td>
                        <td>
                            <a class="btn btn-sm btn-primary" href="{{route('admin.blog.edit',$blog->id)}}">Edit</a><br>
                            <a class="btn btn-sm btn-success" href="{{route('admin.blog.show',$blog->id)}}">View</a><br>
                            <a class="btn btn-sm btn-danger" href="#"
                                onclick="if (confirm('Are you sure to delete?')){document.getElementById('delete-form{{$blog->id}}').submit();}else{event.preventDefault()}">Delete</a>
                        </td>
                        <form id="delete-form{{$blog->id}}" action="{{ route('admin.blog.destroy',$blog->id) }}"
                            method="POST" style="display: none;">
                            @csrf
                            @method('DELETE')
                        </form>
                        </tr>
                        @endforeach
                        </tbody> --}}
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
@include('includes.ajax_setup')
@include('includes.ajax_delete',['url'=>'blogs'])
<script>
    $(document).ready(function () {
        var dataTable = $('#data-table').DataTable({
            "aLengthMenu": [[20, 30, 50, 75, -1], [20, 30, 50, 75, "All"]],
            "pageLength": 20,
           "dom": '<"row justify-content-between top-information"lf>rt<"row justify-content-between bottom-information"ip><"clear">',
            processing: true,
            serverSide: true,
            ajax: '{{ route('admin.blogs.requests') }}',
            columns: [
               {data: 'Sl', name: 'id'},
            {data: 'title', name: 'title'},
            {data: 'details', name: 'details'},
            {data: 'post_by', name: 'post_by'},
            {data: 'image', name: 'image'},
            {data: 'action', name: 'action',orderable: false, searchable: false},
            ],
            order: [0,'desc']
        });
    });
</script>
@endsection