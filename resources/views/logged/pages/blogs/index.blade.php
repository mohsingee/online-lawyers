@extends('logged.layouts.master')
@section('content')

<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="text-primary font-weight-bold">Manage Blogs</h4>
        <a class="btn btn-primary btn-sm" href="{{route('blogs.create')}}">+ Add Blog</a>
    </div>

    <div class="card shadow">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>By</th>
                            <th>Image</th>
                            <th width="150">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($blogs as $key => $blog)
                            <tr data-id="{{ $blog->id }}">
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $blog->title }}</td>
                                <td>{{ $blog->category->name ?? '—' }}</td>
                                <td>{{ $blog->by ?? '—' }}</td>
                                <td>
                                    @if($blog->image)
                                        <img src="{{ asset($blog->image) }}" width="50">
                                    @else — @endif
                                </td>
                                <td>
                                    <a href="{{ route('blogs.edit', $blog->id) }}" class="btn btn-info btn-sm">
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
            text: "This will permanently delete the blog!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!'
        }).then((result)=>{
            if(result.isConfirmed){
                $.ajax({
                    url: "/blogs/" + id,
                    type: 'DELETE',
                    data: {_token:'{{ csrf_token() }}'},
                    success: function(res){
                        toastr.success(res.message);
                        $('tr[data-id="'+id+'"]').remove();
                    },
                    error: ()=> toastr.error('Failed to delete blog')
                });
            }
        });
    });
});
</script>
@endsection
