@extends('logged.layouts.master')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="text-primary font-weight-bold">Edit Blog</h4>
        <a href="{{ route('blogs.index') }}" class="btn btn-secondary btn-sm">← Back to List</a>
    </div>

    <div class="card shadow">
        <div class="card-body">
            <form id="blogForm" action="{{ route('blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="fw-bold">Title</label>
                        <input type="text" name="title" class="form-control" value="{{ old('title', $blog->title) }}">
                        @error('title') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="fw-bold">Author (By)</label>
                        <input type="text" name="by" class="form-control" value="{{ old('by', $blog->by) }}">
                        @error('by') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="fw-bold">Legal Category</label>
                        <select name="legal_category_id" class="form-control">
                            <option value="">Select category</option>
                            @foreach($categories as $cat)
                                <option value="{{ $cat->id }}" {{ old('legal_category_id', $blog->legal_category_id) == $cat->id ? 'selected' : '' }}>
                                    {{ $cat->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('legal_category_id') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="fw-bold">Image</label>
                        <input type="file" name="image" class="form-control">
                        @if($blog->image)
                            <div class="mt-2">
                                <img src="{{ asset($blog->image) }}" width="120" class="img-thumbnail">
                            </div>
                        @endif
                        @error('image') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                </div>

                <div class="form-group mb-4">
                    <label class="fw-bold">Description</label>
                    <textarea name="description" id="description" class="form-control summernote">{{ old('description', $blog->description) }}</textarea>
                    @error('description') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="text-end">
                    <button type="submit" class="btn btn-primary px-4" id="saveBtn">Update Blog</button>
                    <a href="{{ route('blogs.index') }}" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('js')
<script>
    $(document).ready(function(){
        $('#blogForm').on('submit', function(){
            var btn = $('#saveBtn');
            btn.prop('disabled', true);
            btn.text('updating…');
        });
    });
</script>
@endsection