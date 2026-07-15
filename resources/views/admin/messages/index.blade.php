@extends('admin.layout')

@section('title', 'Enquiries')

@section('content')
<div class="card">
    <div class="table-responsive">
        <table class="table table-hover align-middle mb-0">
            <thead class="table-light">
                <tr>
                    <th>From</th>
                    <th>Subject</th>
                    <th>Phone</th>
                    <th>Received</th>
                    <th class="text-end">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($messages as $msg)
                    <tr class="{{ $msg->is_read ? '' : 'table-warning' }}">
                        <td class="{{ $msg->is_read ? '' : 'fw-semibold' }}">{{ $msg->first_name }} {{ $msg->last_name }}<br><small class="text-muted fw-normal">{{ $msg->email }}</small></td>
                        <td>{{ $msg->subject ?: '—' }}</td>
                        <td>{{ $msg->phone ?: '—' }}</td>
                        <td>{{ $msg->created_at->format('d M Y, H:i') }}</td>
                        <td class="text-end">
                            <a href="{{ route('admin.messages.show', $msg) }}" class="btn btn-sm btn-outline-primary"><i class="bi bi-envelope-open"></i> Read</a>
                            <form method="POST" action="{{ route('admin.messages.destroy', $msg) }}" class="d-inline"
                                  onsubmit="return confirm('Delete this enquiry?');">
                                @csrf @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="5" class="text-center text-muted py-4">No enquiries received yet. Enquiries submitted on the Contact page will appear here.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
    @if ($messages->hasPages())
        <div class="card-footer bg-white">{{ $messages->links() }}</div>
    @endif
</div>
@endsection
