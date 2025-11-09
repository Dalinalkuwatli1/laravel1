@extends('dashboard.layout.master')

@section('title_page', 'Create Users')
@section('content')

    <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col-md-6 mb-4">
                <!-- Name Field -->
                 <br>  
                     <br> 
                          <br>      <br>
                <div class="form-group">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" value="{{ old('name') }}">
                    @error('name')
                        <div class="text-danger small">{{ $message }}</div>
                    @enderror
          </div>

                <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
                    @error('email')
                        <div class="text-danger small">{{ $message }}</div>
                    @enderror
                </div>
  
                <div class="form-group">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter your phone number">
                    @error('phone')
                        <div class="text-danger small">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="state" class="form-label">State</label>
                    <select id="state" class="form-control" name="state">
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                    @error('state')
                        <div class="text-danger small">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
                    @error('password')
                        <div class="text-danger small">{{ $message }}</div>
                    @enderror
                    <small class="text-muted">Leave blank to keep the current password.</small>
                </div>

                <div class="form-group">
                    <label for="password_confirmation" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm your password">
                    @error('password_confirmation')
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
