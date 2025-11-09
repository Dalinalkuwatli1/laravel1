@extends('dashboard.layout.master')

@section('title_page', 'Edit Work')
@section('content')

<div class="container mt-4">
    <br><br>
    <div class="card shadow-lg p-4">
        <h3 class="text-center mb-4">Edit Work</h3>

        <!-- Form to edit work -->
        <form action="{{ route('works.update', $work->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT') <!-- Use PUT method for updating the record -->

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $work->title) }}">
                    @error('title')
                        <div class="text-red-500 text-sm">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-6 mb-3">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone', $work->phone) }}">
                    @error('phone')
                        <div class="text-red-500 text-sm">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="mb-3">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $work->email) }}">
                @error('email')
                    <div class="text-red-500 text-sm">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" rows="4">{{ old('description', $work->description) }}</textarea>
                @error('description')
                    <div class="text-red-500 text-sm">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="status">Status</label>
                <select id="status" class="form-control" name="status">
                    <option value="active" {{ old('status', $work->status) == 'active' ? 'selected' : '' }}>Active</option>
                    <option value="inactive" {{ old('status', $work->status) == 'inactive' ? 'selected' : '' }}>Inactive</option>
                </select>
                @error('status')
                    <div class="text-red-500 text-sm">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="image">Image</label>
                <input type="file" class="form-control" id="image" name="image">
                @if($work->image)
                    <div class="mt-2">
                        <img src="{{ asset($work->image) }}" class="img-thumbnail" width="100">
                    </div>
                @endif
                @error('image')
                    <div class="text-red-500 text-sm">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <button type="submit" class="btn btn-primary">Save Changes</button>
            </div>
        </form>
    </div>
</div>

@endsection
