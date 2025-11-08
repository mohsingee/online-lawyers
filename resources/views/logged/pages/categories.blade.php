@extends('logged.layouts.master')
@section('content')

<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="text-primary font-weight-bold">Manage Legal Categories</h4>
        <button class="btn btn-primary btn-sm" id="addCategoryBtn">+ Add Category</button>
    </div>

    <div class="card shadow">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th width="60">#</th>
                            <th>Category Name</th>
                            <th width="150">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $key => $category)
                            <tr data-id="{{ $category->id }}">
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $category->name }}</td>
                                <td>
                                    <button class="btn btn-sm btn-info editBtn">Edit</button>
                                    <button class="btn btn-sm btn-danger deleteBtn">Delete</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="categoryModal" tabindex="-1" role="dialog" aria-labelledby="categoryModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form id="categoryForm">
            @csrf
            <input type="hidden" name="id" id="cat_id">

            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="categoryModalLabel">Add Legal Category</h5>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="form-group">
                        <label>Legal Category Name</label>
                        <input type="text" id="cat_name" name="name" class="form-control" placeholder="Enter category name">
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection

@section('js')
<script>
$(document).ready(function() {

    // Open Add Modal
    $('#addCategoryBtn').click(function() {
        $('#categoryForm')[0].reset();
        $('#cat_id').val('');
        $('#categoryModalLabel').text('Add Legal Category');
        $('#categoryModal').modal('show');
    });

    // Edit Category
    $(document).on('click', '.editBtn', function() {
        let id = $(this).closest('tr').data('id');

        $.ajax({
            url: "/legal_categories/" + id + "/edit",
            method: "GET",
            success: function(data) {
                $('#cat_id').val(data.id);
                $('#cat_name').val(data.name);
                $('#categoryModalLabel').text('Edit Legal Category');
                $('#categoryModal').modal('show');
            },
            error: function() {
                toastr.error('Failed to fetch category data');
            }
        });
    });

    // Create or Update
    $('#categoryForm').submit(function(e) {
        e.preventDefault();

        let id = $('#cat_id').val();
        let url = id ? "/legal_categories/" + id : "/legal_categories"; // ✅ Correct
        let formData = $(this).serialize();
        if (id) {
            formData += '&_method=PUT';
        }

        $.ajax({
            url: url,
            method: 'POST', // always POST
            data: formData,
            success: function(response) {
                toastr.success(response.message);
                $('#categoryModal').modal('hide');
                setTimeout(() => location.reload(), 1000);
            },
            error: function(xhr) {
                console.log(xhr.responseText);
                toastr.error('Something went wrong.');
            }
        });
    });

    // Delete
    $(document).on('click', '.deleteBtn', function() {
        let id = $(this).closest('tr').data('id');

        Swal.fire({
            title: 'Are you sure?',
            text: "This will permanently delete the category!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "/legal_categories/" + id,
                    method: 'DELETE',
                    data: {_token: '{{ csrf_token() }}'},
                    success: function(response) {
                        toastr.success(response.message);
                        $('tr[data-id="'+id+'"]').remove();
                    },
                    error: function() {
                        toastr.error('Failed to delete category');
                    }
                });
            }
        });
    });
});
</script>
@endsection
