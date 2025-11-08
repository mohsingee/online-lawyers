@extends('logged.layouts.master')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <!-- Content Row -->
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex justify-content-between align-items-center">
                    <h6 class="m-0 font-weight-bold text-primary">
                        Add New User
                    </h6>
                    <a href="{{ route('users.index') }}" class="btn btn-sm btn-secondary">
                        <i class="fas fa-arrow-left"></i> Back
                    </a>
                </div>
                <div class="card-body">
                    <form id="userForm">
                        @csrf
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <label for="name">Full Name</label>
                                <input type="text" id="name" name="name" 
                                       placeholder="Enter user name" 
                                       class="form-control form-control-user">
                            </div>
                            <div class="col-sm-6">
                                <label for="email">Email Address</label>
                                <input type="email" id="email" name="email" 
                                       placeholder="Enter user email" 
                                       class="form-control form-control-user">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <label for="password">New Password</label>
                                <input type="password" id="password" name="password" 
                                       placeholder="Enter Password" 
                                       class="form-control form-control-user">
                            </div>
                            <div class="col-sm-6">
                                <label for="password_confirmation">Confirm Password</label>
                                <input type="password" id="password_confirmation" name="password_confirmation" 
                                       placeholder="Confirm password" 
                                       class="form-control form-control-user">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="role">Select Role</label>
                            <select name="role" id="role" class="form-control form-control-user">
                                <option value="">-- Select Role --</option>
                                <option value="creator">Creator</option>
                                <option value="user">User</option>
                                <option value="lawyer">Lawyer</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary btn-user float-right">
                            <span>Create User</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
@endsection
@section('js')
<script>
$(document).ready(function() {
    $('#userForm').on('submit', function(e) {
        e.preventDefault(); // stop normal form submit

        let $btn = $('.btn-user'); // button reference
        let oldText = $btn.html();

        $.ajax({
            url: "{{ route('users.store') }}",
            method: "POST",
            data: $(this).serialize(),
            beforeSend: function() {
                $btn.prop('disabled', true).html('<span>Creating...</span>');
            },
            success: function(response) {
                toastr.success(response.message);

                // 1 sec delay, then redirect
                setTimeout(function() {
                    window.location.href = "{{ route('users.index') }}";
                }, 1000);
            },
            error: function(xhr) {
                if (xhr.status === 422) {
                    let errors = xhr.responseJSON.errors;
                    $.each(errors, function (key, value) {
                        toastr.error(value[0]);
                    });
                } else if (xhr.responseJSON?.message) {
                    toastr.error(xhr.responseJSON.message);
                } else {
                    toastr.error('Something went wrong. Please try again.');
                }
            },
            complete: function() {
                $btn.prop('disabled', false).html(oldText); // reset button if error
            }
        });
    });
});
</script>
@endsection
