@extends('admin.layout')

@section('title', 'Dashboard')

@section('content')
<div class="row g-3 mb-4">
    <div class="col-md-3 col-sm-6">
        <div class="card text-bg-primary">
            <div class="card-body d-flex justify-content-between align-items-center">
                <div>
                    <div class="fs-3 fw-bold">{{ $categoryCount }}</div>
                    <div>Categories</div>
                </div>
                <i class="bi bi-tags fs-1 opacity-50"></i>
            </div>
            <a href="{{ route('admin.categories.index') }}" class="card-footer text-white text-decoration-none small">Manage <i class="bi bi-arrow-right"></i></a>
        </div>
    </div>
    <div class="col-md-3 col-sm-6">
        <div class="card text-bg-success">
            <div class="card-body d-flex justify-content-between align-items-center">
                <div>
                    <div class="fs-3 fw-bold">{{ $productCount }}</div>
                    <div>Products</div>
                </div>
                <i class="bi bi-box-seam fs-1 opacity-50"></i>
            </div>
            <a href="{{ route('admin.products.index') }}" class="card-footer text-white text-decoration-none small">Manage <i class="bi bi-arrow-right"></i></a>
        </div>
    </div>
    <div class="col-md-3 col-sm-6">
        <div class="card text-bg-warning">
            <div class="card-body d-flex justify-content-between align-items-center">
                <div>
                    <div class="fs-3 fw-bold">{{ $messageCount }}</div>
                    <div>Enquiries</div>
                </div>
                <i class="bi bi-envelope fs-1 opacity-50"></i>
            </div>
            <a href="{{ route('admin.messages.index') }}" class="card-footer text-dark text-decoration-none small">View <i class="bi bi-arrow-right"></i></a>
        </div>
    </div>
    <div class="col-md-3 col-sm-6">
        <div class="card text-bg-danger">
            <div class="card-body d-flex justify-content-between align-items-center">
                <div>
                    <div class="fs-3 fw-bold">{{ $unreadCount }}</div>
                    <div>Unread</div>
                </div>
                <i class="bi bi-envelope-exclamation fs-1 opacity-50"></i>
            </div>
            <a href="{{ route('admin.messages.index') }}" class="card-footer text-white text-decoration-none small">View <i class="bi bi-arrow-right"></i></a>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header bg-white fw-semibold">Latest Enquiries from Contact Page</div>
    <div class="table-responsive">
        <table class="table table-hover align-middle mb-0">
            <thead class="table-light">
                <tr><th>From</th><th>Subject</th><th>Received</th><th></th></tr>
            </thead>
            <tbody>
                @forelse ($latestMessages as $msg)
                    <tr class="{{ $msg->is_read ? '' : 'fw-semibold' }}">
                        <td>{{ $msg->first_name }} {{ $msg->last_name }}<br><small class="text-muted fw-normal">{{ $msg->email }}</small></td>
                        <td>{{ $msg->subject ?: '—' }}</td>
                        <td>{{ $msg->created_at->diffForHumans() }}</td>
                        <td class="text-end"><a href="{{ route('admin.messages.show', $msg) }}" class="btn btn-sm btn-outline-primary">Open</a></td>
                    </tr>
                @empty
                    <tr><td colspan="4" class="text-center text-muted py-4">No enquiries yet.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
