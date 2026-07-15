@extends('admin.layout')

@section('title', 'Meta Tags (SEO)')

@section('content')
<form method="POST" action="{{ route('admin.meta.update') }}">
    @csrf
    @method('PUT')

    @foreach ($pages as $page)
        <div class="card mb-4">
            <div class="card-header bg-white d-flex justify-content-between align-items-center">
                <span class="fw-semibold">{{ $page->name }} Page</span>
                <code>/{{ $page->slug === 'home' ? '' : $page->slug }}</code>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label class="form-label">Meta Title <small class="text-muted">(shown in browser tab &amp; Google result title)</small></label>
                    <input type="text" name="meta[{{ $page->slug }}][meta_title]" maxlength="255" class="form-control"
                           value="{{ old('meta.' . $page->slug . '.meta_title', $page->meta_title) }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Meta Keywords <small class="text-muted">(comma separated)</small></label>
                    <input type="text" name="meta[{{ $page->slug }}][meta_keywords]" maxlength="1000" class="form-control"
                           value="{{ old('meta.' . $page->slug . '.meta_keywords', $page->meta_keywords) }}"
                           placeholder="hand tools, JIHI, screwdriver, pliers">
                </div>
                <div class="mb-0">
                    <label class="form-label">Meta Description <small class="text-muted">(shown under the title in Google, ~160 characters recommended)</small></label>
                    <textarea name="meta[{{ $page->slug }}][meta_description]" rows="2" maxlength="1000" class="form-control">{{ old('meta.' . $page->slug . '.meta_description', $page->meta_description) }}</textarea>
                </div>
            </div>
        </div>
    @endforeach

    <button type="submit" class="btn btn-primary">Save Meta Tags</button>
</form>
@endsection
