@extends('logged.layouts.master')
@section('content')

<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="text-primary font-weight-bold">Manage Law Firms</h4>
        <a class="btn btn-primary btn-sm" href="{{ route('lawfirms.create') }}">+ Add Law Firm</a>
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
                            <th>LinkedIn</th>
                            <th>Website</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($lawfirms as $key => $lawfirm)
                            <tr data-id="{{ $lawfirm->id }}">
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $lawfirm->title }}</td>
                                <td>{{ $lawfirm->category->name ?? '—' }}</td>
                                <td>
                                    @if($lawfirm->linkedin_url)
                                        <a href="{{ $lawfirm->linkedin_url }}" target="_blank" class="text-primary">
                                            <i class="fab fa-linkedin"></i>
                                        </a>
                                    @else — @endif
                                </td>
                                <td>
                                    @if($lawfirm->website_link)
                                        <a href="{{ $lawfirm->website_link }}" target="_blank" class="text-success">
                                            <i class="fas fa-globe"></i>
                                        </a>
                                    @else — @endif
                                </td>
                                <td>
                                    @if($lawfirm->image)
                                        <img src="{{ asset($lawfirm->image) }}" width="60" height="60" class="rounded border">
                                    @else — @endif
                                </td>
                                <td>
                                    <a href="{{ route('lawfirms.edit', $lawfirm->id) }}" class="btn btn-info btn-sm">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
                                    <button class="btn btn-danger btn-sm deleteBtn">
                                        <i class="fas fa-trash"></i> Delete
                                    </button>
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
            text: "This will permanently delete the law firm!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!'
        }).then((result)=>{
            if(result.isConfirmed){
                $.ajax({
                    url: "/lawfirms/" + id,
                    type: 'DELETE',
                    data: {_token:'{{ csrf_token() }}'},
                    success: function(res){
                        toastr.success(res.message);
                        $('tr[data-id="'+id+'"]').fadeOut(300, function(){ $(this).remove(); });
                    },
                    error: ()=> toastr.error('Failed to delete law firm')
                });
            }
        });
    });
});
</script>
@endsection
