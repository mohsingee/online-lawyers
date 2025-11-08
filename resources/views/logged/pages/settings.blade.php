@extends('logged.layouts.master')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="text-primary font-weight-bold">Website Settings</h4>
        <a href="{{ route('dashboard') }}" class="btn btn-secondary btn-sm">← Back to Dashboard</a>
    </div>

    <div class="card shadow">
        <div class="card-body">
            <form id="settingsForm" action="{{ route('settings.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="fw-bold">Website Name</label>
                        <input type="text" name="site_name" class="form-control" value="{{ old('site_name', $settings->site_name ?? '') }}">
                        @error('site_name') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="fw-bold">Phone</label>
                        <input type="text" name="phone" class="form-control" value="{{ old('phone', $settings->phone ?? '') }}">
                        @error('phone') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="fw-bold">Email</label>
                        <input type="email" name="email" class="form-control" value="{{ old('email', $settings->email ?? '') }}">
                        @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="fw-bold">Logo</label>
                        <input type="file" name="logo" class="form-control">
                        @if(!empty($settings->logo))
                            <img src="{{ asset($settings->logo) }}" alt="Logo" class="img-thumbnail mt-2" width="120">
                        @endif
                        @error('logo') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                </div>

                <div class="mb-3">
                    <label class="fw-bold">Address</label>
                    <textarea name="address" rows="3" class="form-control">{{ old('address', $settings->address ?? '') }}</textarea>
                    @error('address') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="mb-3">
                    <label class="fw-bold">Footer Text</label>
                    <input type="text" name="footer_text" class="form-control" value="{{ old('footer_text', $settings->footer_text ?? '') }}">
                    @error('footer_text') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="text-end">
                    <button type="submit" class="btn btn-primary px-4" id="saveBtn">Save Settings</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
$(document).ready(function(){
    $('#settingsForm').on('submit', function(){
        var btn = $('#saveBtn');
        btn.prop('disabled', true);
        btn.text('Saving…');
    });
});
</script>
@endsection
