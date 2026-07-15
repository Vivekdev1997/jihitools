@extends('admin.layout')

@section('title', $category->exists ? 'Edit Category' : 'Add Category')

@section('content')
<div class="card">
    <div class="card-body">
        <form method="POST" enctype="multipart/form-data"
              action="{{ $category->exists ? route('admin.categories.update', $category) : route('admin.categories.store') }}">
            @csrf
            @if ($category->exists) @method('PUT') @endif

            <div class="row">
                <div class="col-lg-8">
                    <div class="mb-3">
                        <label class="form-label">Name <span class="text-danger">*</span></label>
                        <input type="text" name="name" value="{{ old('name', $category->name) }}" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea name="description" rows="4" class="form-control">{{ old('description', $category->description) }}</textarea>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="mb-3">
                        <label class="form-label">Image</label>
                        @if ($category->image)
                            <div class="mb-2"><img src="{{ media_url($category->image) }}" style="max-width:180px;border-radius:6px;" alt=""></div>
                        @endif
                        <input type="file" name="image" class="form-control" accept="image/*">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Sort Order</label>
                        <input type="number" name="sort_order" value="{{ old('sort_order', $category->sort_order ?? 0) }}" class="form-control" min="0">
                    </div>

                    <div class="form-check form-switch mb-3">
                        <input type="hidden" name="is_active" value="0">
                        <input type="checkbox" name="is_active" id="is_active" value="1" class="form-check-input"
                               {{ old('is_active', $category->exists ? $category->is_active : true) ? 'checked' : '' }}>
                        <label class="form-check-label" for="is_active">Active (show on website)</label>
                    </div>
                </div>
            </div>

            <hr>
            <button type="submit" class="btn btn-primary">{{ $category->exists ? 'Save Changes' : 'Create Category' }}</button>
            <a href="{{ route('admin.categories.index') }}" class="btn btn-outline-secondary">Cancel</a>
        </form>
    </div>
</div>
@endsection
