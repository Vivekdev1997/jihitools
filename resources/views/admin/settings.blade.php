@extends('admin.layout')

@section('title', 'Site Settings')

@section('content')
<form method="POST" action="{{ route('admin.settings.update') }}">
    @csrf
    @method('PUT')

    @foreach ($groups as $groupName => $fields)
        <div class="card mb-4">
            <div class="card-header bg-white fw-semibold">{{ $groupName }}</div>
            <div class="card-body">
                <div class="row">
                    @foreach ($fields as $key => $label)
                        <div class="col-md-6 mb-3">
                            <label class="form-label">{{ $label }}</label>
                            @if (in_array($key, ['address', 'factory_address', 'footer_about']))
                                <textarea name="{{ $key }}" rows="2" class="form-control">{{ old($key, $values[$key] ?? '') }}</textarea>
                            @else
                                <input type="text" name="{{ $key }}" value="{{ old($key, $values[$key] ?? '') }}" class="form-control">
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endforeach

    <button type="submit" class="btn btn-primary">Save Settings</button>
</form>
@endsection
