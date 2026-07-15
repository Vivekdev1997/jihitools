@extends('admin.layout')

@section('title', $product->exists ? 'Edit Product' : 'Add Product')

@section('content')
<div class="card">
    <div class="card-body">
        @if ($categories->isEmpty())
            <div class="alert alert-warning">You need at least one category first.
                <a href="{{ route('admin.categories.create') }}">Create a category</a>.</div>
        @endif

        <form method="POST" enctype="multipart/form-data"
              action="{{ $product->exists ? route('admin.products.update', $product) : route('admin.products.store') }}">
            @csrf
            @if ($product->exists) @method('PUT') @endif

            <div class="row">
                <div class="col-lg-8">
                    <div class="mb-3">
                        <label class="form-label">Product Name <span class="text-danger">*</span></label>
                        <input type="text" name="name" value="{{ old('name', $product->name) }}" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Short Description <small class="text-muted">(shown on listing cards)</small></label>
                        <textarea name="short_description" rows="2" maxlength="500" class="form-control">{{ old('short_description', $product->short_description) }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Full Description / Content</label>
                        <textarea name="description" id="description" rows="10" class="form-control">{{ old('description', $product->description) }}</textarea>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="mb-3">
                        <label class="form-label">Category <span class="text-danger">*</span></label>
                        <select name="category_id" class="form-select" required>
                            <option value="">— Select —</option>
                            @foreach ($categories as $cat)
                                <option value="{{ $cat->id }}" {{ old('category_id', $product->category_id) == $cat->id ? 'selected' : '' }}>{{ $cat->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Image</label>
                        @if ($product->image)
                            <div class="mb-2"><img src="{{ media_url($product->image) }}" style="max-width:180px;border-radius:6px;" alt=""></div>
                        @endif
                        <input type="file" name="image" class="form-control" accept="image/*">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Sort Order</label>
                        <input type="number" name="sort_order" value="{{ old('sort_order', $product->sort_order ?? 0) }}" class="form-control" min="0">
                    </div>

                    <div class="form-check form-switch mb-3">
                        <input type="hidden" name="is_active" value="0">
                        <input type="checkbox" name="is_active" id="is_active" value="1" class="form-check-input"
                               {{ old('is_active', $product->exists ? $product->is_active : true) ? 'checked' : '' }}>
                        <label class="form-check-label" for="is_active">Active (show on website)</label>
                    </div>
                </div>
            </div>

            <hr>
            <button type="submit" class="btn btn-primary">{{ $product->exists ? 'Save Changes' : 'Create Product' }}</button>
            <a href="{{ route('admin.products.index') }}" class="btn btn-outline-secondary">Cancel</a>
        </form>
    </div>
</div>
@endsection

@push('scripts')
<script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>
<script>
    ClassicEditor.create(document.querySelector('#description'), {
        toolbar: ['heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', '|', 'blockQuote', 'insertTable', 'undo', 'redo']
    }).catch(console.error);
</script>
@endpush
