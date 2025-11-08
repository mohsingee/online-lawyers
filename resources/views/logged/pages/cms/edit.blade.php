@extends('logged.layouts.master')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="text-primary font-weight-bold">Edit CMS Page</h4>
        <a href="{{ route('cms.index') }}" class="btn btn-secondary btn-sm">← Back to List</a>
    </div>

    <div class="card shadow">
        <div class="card-body">
            <form id="cmsForm" action="{{ route('cms.update', $cms->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="fw-bold">Page Name</label>
                        <select name="page" class="form-control">
                            <option value="">Select Page</option>
                            <option value="Home" {{ old('page', $cms->page) == 'Home' ? 'selected' : '' }}>Home</option>
                            <option value="About us" {{ old('page', $cms->page) == 'About us' ? 'selected' : '' }}>About Us</option>
                        </select>
                        @error('page') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="fw-bold">Section</label>
                        <select name="section" class="form-control">
                            @php
                                $count = ($cms->page == 'Home') ? 2 : 4;
                            @endphp
                            <option value="">Select Section</option>
                            @for($i = 1; $i <= $count; $i++)
                                <option value="{{ $i }}" {{ old('section', $cms->section) == $i ? 'selected' : '' }}>
                                    Section {{ $i }}
                                </option>
                            @endfor
                        </select>
                        @error('section') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="fw-bold">Title</label>
                        <input type="text" name="title" class="form-control" value="{{ old('title', $cms->title) }}" placeholder="Enter title">
                        @error('title') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="fw-bold">Image</label>
                        <input type="file" name="image" class="form-control">
                        @if($cms->image)
                            <div class="mt-2">
                                <img src="{{ asset($cms->image) }}" width="120" class="img-thumbnail rounded">
                            </div>
                        @endif
                        @error('image') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                </div>

                <div class="mb-3">
                    <label class="fw-bold">Description</label>
                    <textarea name="description" id="description" class="form-control summernote" placeholder="Enter page content...">{{ old('description', $cms->description) }}</textarea>
                    @error('description') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="text-end">
                    <button type="submit" class="btn btn-primary px-4" id="saveBtn">Update Page</button>
                    <a href="{{ route('cms.index',['page'=>$cms->page]) }}" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    $(document).ready(function(){
        $('#cmsForm').on('submit', function(){
            var btn = $('#saveBtn');
            btn.prop('disabled', true);
            btn.text('Updating…');
        });
    });
</script>
@endsection
