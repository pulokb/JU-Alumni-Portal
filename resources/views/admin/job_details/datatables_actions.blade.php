<div class='btn-group'>

    @if (App\Models\JobDetails::findOrFail($id)->status == "request")
    <a href="{{ route('admin.jobDetails.accept', $id) }}" onclick="return confirm('Are you sure?')"
        class='border-0 btn-sm btn-transition btn btn-outline-success'>
        Accept
    </a>
    @else
    <a href="{{ route('admin.jobDetails.applicants', $id) }}"
        class='border-0 btn-sm btn-transition btn btn-outline-success'>
         Applicants
    </a>
    @endif
    <a href="{{ route('admin.jobDetails.show', $id) }}" class='border-0 btn-sm btn-transition btn btn-outline-primary'>
        View
    </a>
    <a href="{{ route('admin.jobDetails.edit', $id) }}" class='border-0 btn-sm btn-transition btn btn-outline-info'>
        Edit
    </a>
    <a href="javascript:void(0)" data-toggle="tooltip" data-id="{{$id}}" data-original-title="Delete"
        class="border-0 btn-sm btn-transition btn btn-outline-danger delete">Delete</a>
</div>