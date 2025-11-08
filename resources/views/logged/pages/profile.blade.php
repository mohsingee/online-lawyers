@extends('logged.layouts.master')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <!-- Content Row -->
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">
                        Admin Profile
                    </h6>
                </div>
                <div class="card-body">
                    <form id="profileForm">
                        @csrf
                        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">

                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <label for="name">Full Name</label>
                                <input type="text" id="name" name="name" value="{{ auth()->user()->name }}" 
                                       placeholder="Enter your name" 
                                       class="form-control form-control-user">
                            </div>
                            <div class="col-sm-6">
                                <label for="email">Email Address</label>
                                <input type="email" id="email" name="email" value="{{ auth()->user()->email }}" 
                                       placeholder="Enter your email" 
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

                        <button type="submit" class="btn btn-primary btn-user float-right">
                            <span>Save Changes</span>
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
    $('#profileForm').on('submit', function(e) {
        e.preventDefault(); // stop normal form submit

        $.ajax({
            url: "{{ route('account.update') }}",
            method: "POST",
            data: $(this).serialize(),
            success: function(response) {
                console.log(response); // check in console
                toastr.success(response.message);
            },
            error: function(xhr) {
                console.log(xhr.responseJSON); // debug
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
            }
        });
    });
});
</script>
@endsection
