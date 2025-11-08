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
                        Edit User
                    </h6>
                    <a href="{{ route('users.index') }}" class="btn btn-sm btn-secondary">
                        <i class="fas fa-arrow-left"></i> Back
                    </a>
                </div>
                <div class="card-body">
                    <form id="userEditForm">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="id" value="{{ $user->id }}">

                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <label for="name">Full Name</label>
                                <input type="text" id="name" name="name" 
                                       value="{{ $user->name }}"
                                       placeholder="Enter user name" 
                                       class="form-control form-control-user">
                            </div>
                            <div class="col-sm-6">
                                <label for="email">Email Address</label>
                                <input type="email" id="email" name="email" 
                                       value="{{ $user->email }}"
                                       placeholder="Enter user email" 
                                       class="form-control form-control-user">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <label for="password">New Password</label>
                                <input type="password" id="password" name="password" 
                                       placeholder="Leave blank to keep current" 
                                       class="form-control form-control-user">
                            </div>
                            <div class="col-sm-6">
                                <label for="password_confirmation">Confirm Password</label>
                                <input type="password" id="password_confirmation" name="password_confirmation" 
                                       placeholder="Confirm new password" 
                                       class="form-control form-control-user">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="role">Select Role</label>
                            <select name="role" id="role" class="form-control form-control-user" required>
                                <option value="">-- Select Role --</option>
                                <option value="creator" @if($user->role == 'creator') selected @endif>Creator</option>
                                <option value="user" @if($user->role == 'user') selected @endif>User</option>
                                <option value="lawyer" @if($user->role == 'lawyer') selected @endif>Lawyer</option>
                            </select>
                        </div>

                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-success btn-user">
                                <i class="fas fa-save"></i> Update User
                            </button>
                        </div>
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
    $('#userEditForm').on('submit', function(e) {
        e.preventDefault();

        let $btn = $('.btn-user'); // edit button class same rakhi hai
        let oldText = $btn.html();

        $.ajax({
            url: "{{ route('users.update', $user->id) }}",
            method: "POST",
            data: $(this).serialize(),
            beforeSend: function() {
                $btn.prop('disabled', true).html('<span>Updating...</span>');
            },
            success: function(response) {
                toastr.success(response.message);

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
                $btn.prop('disabled', false).html(oldText);
            }
        });
    });
});
</script>
@endsection
