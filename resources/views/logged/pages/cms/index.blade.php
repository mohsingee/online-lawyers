@extends('logged.layouts.master')
@section('content')

<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="text-primary font-weight-bold">Manage {{$page}} Page</h4>
        <a class="btn btn-primary btn-sm" href="{{ route('cms.create', ['page' => $page]) }}">
            + Add {{ $page }}
        </a>
    </div>

    <div class="card shadow">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Page</th>
                            <th>Section</th>
                            <th>Image</th>
                            <th width="150">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cmsPages as $key => $value)
                            <tr data-id="{{ $value->id }}">
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $value->title }}</td>
                                <td>{{ $value->page ?? '—' }}</td>
                                <td>{{ $value->section ?? '—' }}</td>
                                <td>
                                    @if($value->image)
                                        <img src="{{ asset($value->image) }}" width="50">
                                    @else — @endif
                                </td>
                                <td>
                                    <a href="{{ route('cms.edit', $value) }}" class="btn btn-info btn-sm">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
                                    <button class="btn btn-danger btn-sm deleteBtn">Delete</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
$(function() {
    // Delete
    $(document).on('click', '.deleteBtn', function() {
        let id = $(this).closest('tr').data('id');
        Swal.fire({
            title: 'Are you sure?',
            text: "This will permanently delete the content!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!'
        }).then((result)=>{
            if(result.isConfirmed){
                $.ajax({
                    url: "/cms/" + id,
                    type: 'DELETE',
                    data: {_token:'{{ csrf_token() }}'},
                    success: function(res){
                        toastr.success(res.message);
                        $('tr[data-id="'+id+'"]').remove();
                    },
                    error: ()=> toastr.error('Failed to delete content')
                });
            }
        });
    });
});
</script>
@endsection
