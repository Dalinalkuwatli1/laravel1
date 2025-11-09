@extends('dashboard.layout.master')

@section('title_page', 'Create galleries')
@section('content')

<div class="container mt-4">
    <br><br>
    <div class="card shadow-lg p-4">
        <h3 class="text-center mb-4">Edit galleries</h3>

        <!-- Form to edit galleries -->
        <form action="{{ route('galleries.update', $galleries->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT') <!-- Use PUT method for updating the record -->

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="description">description</label>
                    <input type="text" class="form-control" id="description" name="description" value="{{ old('description', $galleries->description) }}">
                    @error('description')
                        <div class="text-red-500 text-sm">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label for="title">title</label>
                    <input type="title" class="form-control" id="title" name="title" value="{{ old('title', $galleries->title) }}">
                    @error('title')
                        <div class="text-red-500 text-sm">{{ $message }}</div>
                    @enderror
                </div>
            </div>


            <div class="mb-3">
                <label for="status">status</label>
                <select id="status" class="form-control" name="status">
                    <option value="1" {{ old('status', $galleries->status) == 1 ? 'selected' : '' }}>Active</option>
                    <option value="0" {{ old('status', $galleries->status) == 0 ? 'selected' : '' }}>Inactive</option>
                </select>
                @error('status')
                    <div class="text-red-500 text-sm">{{ $message }}</div>
                @enderror
            </div>


            <div class="mb-3">
                <label for="image">Profile Image</label>
                <input type="file" class="form-control" id="image" name="image">
                @if($galleries->image)
                    <div class="mt-2">
                        <img src="{{ asset($galleries->image) }}" class="img-thumbnail" width="100">
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
