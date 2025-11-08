@extends('logged.layouts.master')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="text-primary font-weight-bold">Edit Law Firm</h4>
        <a href="{{ route('lawfirms.index') }}" class="btn btn-secondary btn-sm">← Back to List</a>
    </div>

    <div class="card shadow">
        <div class="card-body">
            <form id="lawFirmForm" action="{{ route('lawfirms.update', $lawfirm->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row">
                    <!-- Title -->
                    <div class="col-md-6 mb-3">
                        <label class="fw-bold">Title</label>
                        <input type="text" name="title" class="form-control" value="{{ old('title', $lawfirm->title) }}">
                        @error('title') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <!-- Category -->
                    <div class="col-md-6 mb-3">
                        <label class="fw-bold">Legal Category</label>
                        <select name="legal_category_id" class="form-control">
                            <option value="">Select category</option>
                            @foreach($categories as $cat)
                                <option value="{{ $cat->id }}" {{ old('legal_category_id', $lawfirm->legal_category_id) == $cat->id ? 'selected' : '' }}>
                                    {{ $cat->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('legal_category_id') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                </div>

                <div class="row">
                    <!-- LinkedIn -->
                    <div class="col-md-6 mb-3">
                        <label class="fw-bold">LinkedIn URL</label>
                        <input type="url" name="linkedin_url" class="form-control" placeholder="https://linkedin.com/company/example" value="{{ old('linkedin_url', $lawfirm->linkedin_url) }}">
                        @error('linkedin_url') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <!-- Website -->
                    <div class="col-md-6 mb-3">
                        <label class="fw-bold">Website Link</label>
                        <input type="url" name="website_link" class="form-control" placeholder="https://example.com" value="{{ old('website_link', $lawfirm->website_link) }}">
                        @error('website_link') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                </div>

                <div class="row">
                    <!-- Image -->
                    <div class="col-md-6 mb-3">
                        <label class="fw-bold">Image</label>
                        <input type="file" name="image" class="form-control">
                        @if($lawfirm->image)
                            <div class="mt-2">
                                <img src="{{ asset($lawfirm->image) }}" width="120" class="img-thumbnail rounded">
                            </div>
                        @endif
                        @error('image') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                </div>

                <!-- Description -->
                <div class="form-group mb-4">
                    <label class="fw-bold">Description</label>
                    <textarea name="description" id="description" class="form-control summernote">{{ old('description', $lawfirm->description) }}</textarea>
                    @error('description') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="text-end">
                    <button type="submit" class="btn btn-primary px-4" id="saveBtn">Update Law Firm</button>
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
            btn.text('Updating…');
        });
    });
</script>
@endsection
