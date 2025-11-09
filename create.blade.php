@extends('dashboard.layout.master')

@section('title_page', 'Create galleries')
@section('content')

    <form action="{{ route('galleries.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col-md-6 mb-4">
                <!-- Name Field -->
                 <br>
                     <br>
                          <br>      <br>
                <div class="form-group">
                    <label for="description" class="form-label">description</label>
                    <input type="text" class="form-control" id="description" name="description" placeholder="Enter your description" value="{{ old('description') }}">
                    @error('description')
                        <div class="text-danger small">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="title" class="form-label">title</label>
                    <input type="title" class="form-control" id="title" name="title" placeholder="Enter your title">
                    @error('title')
                        <div class="text-danger small">{{ $message }}</div>
                    @enderror
                </div>



                <div class="form-group">
                    <label for="status" class="form-label">status</label>
                    <select id="status" class="form-control" name="status">
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                    @error('status')
                        <div class="text-danger small">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                <label for="image">Profile Image</label>
                <input type="file" class="form-control" id="image" name="image">

                @error('image')
                    <div class="text-red-500 text-sm">{{ $message }}</div>
                @enderror
            </div>

                <div class="form-group mt-3">
                    <button type="submit" class="btn btn-primary w-100">Save Changes</button>
                </div>
            </div>
        </div>

    </form>

@endsection
