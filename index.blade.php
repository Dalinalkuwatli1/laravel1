@extends('dashboard.layout.master')

@section('title_page', 'Works')
@section('content')

<br>
<br>
<br>
<br><!-- Bootstrap 5 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap 5 JS + Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<div class="container mt-4">
    <!-- Card to add works -->
    <div class="card shadow-lg p-4">
        <div class="d-flex justify-content-between align-items-center">
            <h3>Works List</h3>
            <a href="{{ route('works.create') }}" class="btn btn-danger btn-tone">
                <i class="fas fa-plus"></i> Add Work
            </a>
        </div>

        <!-- Table to display work data -->
        <div class="table-responsive mt-3">
            <table class="table table-striped table-bordered text-center">
                <thead class="table table-primary">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Email</th>
                        <th scope="col">Status</th>
                        <th scope="col">Created At</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($works as $work)
                        <tr>
                            <td>
                                <img src="{{ asset($work->image) }}" alt="Work Image" class="rounded-circle" width="50"
                                    height="50">
                            </td>
                            <td>{{ $work->title }}</td>
                            <td>{{ $work->description }}</td>
                            <td>{{ $work->phone }}</td>
                            <td>{{ $work->email }}</td>
                            <td>
                                <span class="badge bg-{{ $work->status == 'active' ? 'success' : 'danger' }}">
                                    {{ ucfirst($work->status) }}
                                </span>
                            </td>
                            <td>{{ $work->created_at->format('d M Y') }}</td>
                            <td>
                                <!-- Action buttons -->
                                <form action="{{ route('works.destroy', $work->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm me-2" type="submit">Delete</button>
                                </form>
                                <a href="{{ route('works.edit', $work->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
