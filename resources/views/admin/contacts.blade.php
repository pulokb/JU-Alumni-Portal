@extends('layouts.admin')
@section('title','Contacts')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header">
                <h5 class="card-title text-primary">Contacts</h5><br>

            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="data-table" class="table table-bordered table-hover table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th> SL. </th>
                                <th> Name </th>
                                <th> Email </th>
                                <th> Phone </th>
                                <th> Message </th>
                                <th> Time </th>
                                <th> Action </th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
@include('includes.ajax_setup')
@include('includes.ajax_delete',['url'=>'contact-feedback-delete'])
<script>
    $(document).ready(function () {
       var dataTable = $('#data-table').DataTable({
            "aLengthMenu": [[20, 30, 50, 75, -1], [20, 30, 50, 75, "All"]],
            "pageLength": 20,
            "dom": '<"row justify-content-between top-information"lf>rt<"row justify-content-between bottom-information"ip><"clear">',
   
            processing: true,
            serverSide: true,
            ajax: '{!! route('admin.contacts') !!}',
            columns: [
                {data: 'Sl', name: 'id'},
                {data: 'name', name: 'name'},
                {data: 'email', name: 'email'},
                {data: 'phone', name: 'phone'},
                {data: 'message', name: 'message'},
                {data: 'created_at', name: 'created_at'},
                {data: 'action', name: 'action',orderable: false, searchable: false},
            ],
            order: [0,'desc']
        });
    });
</script>
@endsection