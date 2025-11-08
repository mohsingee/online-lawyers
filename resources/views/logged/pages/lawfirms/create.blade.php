@extends('logged.layouts.master')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="text-primary font-weight-bold">Add New Law Firm</h4>
        <a href="{{ route('lawfirms.index') }}" class="btn btn-secondary btn-sm">← Back to List</a>
    </div>

    <div class="card shadow">
        <div class="card-body">
            <form id="lawFirmForm" action="{{ route('lawfirms.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <!-- Title -->
                    <div class="col-md-6 mb-3">
                        <label class="fw-bold">Title</label>
                        <input type="text" name="title" class="form-control" placeholder="Enter law firm title" value="{{ old('title') }}">
                        @error('title') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <!-- Category -->
                    <div class="col-md-6 mb-3">
                        <label class="fw-bold">Legal Category</label>
                        <select name="legal_category_id" class="form-control">
                            <option value="">Select category</option>
                            @foreach($categories as $cat)
                                <option value="{{ $cat->id }}" {{ old('legal_category_id') == $cat->id ? 'selected' : '' }}>
                                    {{ $cat->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('legal_category_id') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                </div>

                <div class="row">
                    <!-- Image -->
                    <div class="col-md-6 mb-3">
                        <label class="fw-bold">Image</label>
                        <input type="file" name="image" class="form-control">
                        @error('image') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <!-- LinkedIn URL -->
                    <div class="col-md-6 mb-3">
                        <label class="fw-bold">LinkedIn URL</label>
                        <input type="url" name="linkedin_url" class="form-control" placeholder="https://linkedin.com/company/example" value="{{ old('linkedin_url') }}">
                        @error('linkedin_url') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                </div>

                <div class="row">
                    <!-- Website Link -->
                    <div class="col-md-6 mb-3">
                        <label class="fw-bold">Website Link</label>
                        <input type="url" name="website_link" class="form-control" placeholder="https://example.com" value="{{ old('website_link') }}">
                        @error('website_link') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                </div>

                <!-- Description -->
                <div class="form-group mb-4">
                    <label class="fw-bold">Description</label>
                    <textarea name="description" id="description" class="form-control summernote">{{ old('description') }}</textarea>
                    @error('description') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="text-end">
                    <button type="submit" class="btn btn-primary px-4" id="saveBtn">Save Law Firm</button>
                    <a href="{{ route('lawfirms.index') }}" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    $(document).ready(function(){
        $('#lawFirmForm').on('submit', function(){
            var btn = $('#saveBtn');
            btn.prop('disabled', true);
            btn.text('Submitting…');
        });
    });
</script>
@endsection
