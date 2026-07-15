@extends('admin.layout')

@section('title', 'Enquiry from ' . $message->first_name . ' ' . $message->last_name)

@section('actions')
    <a href="{{ route('admin.messages.index') }}" class="btn btn-outline-secondary"><i class="bi bi-arrow-left"></i> Back</a>
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row mb-3">
            <div class="col-md-3"><strong>Name</strong><br>{{ $message->first_name }} {{ $message->last_name }}</div>
            <div class="col-md-3"><strong>Email</strong><br><a href="mailto:{{ $message->email }}">{{ $message->email }}</a></div>
            <div class="col-md-3"><strong>Phone</strong><br>{{ $message->phone ?: '—' }}</div>
            <div class="col-md-3"><strong>Company</strong><br>{{ $message->company ?: '—' }}</div>
        </div>
        <div class="mb-3"><strong>Subject</strong><br>{{ $message->subject ?: '—' }}</div>
        <div class="mb-3"><strong>Message</strong>
            <div class="border rounded p-3 bg-light mt-1">{{ $message->message ?: '—' }}</div>
        </div>
        <div class="text-muted small">Received {{ $message->created_at->format('d M Y, H:i') }} ({{ $message->created_at->diffForHumans() }})</div>
    </div>
    <div class="card-footer bg-white">
        <form method="POST" action="{{ route('admin.messages.destroy', $message) }}"
              onsubmit="return confirm('Delete this enquiry?');">
            @csrf @method('DELETE')
            <button type="submit" class="btn btn-outline-danger"><i class="bi bi-trash"></i> Delete Enquiry</button>
        </form>
    </div>
</div>
@endsection
