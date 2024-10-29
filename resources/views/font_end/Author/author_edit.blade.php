@extends('font_end.Author.dashboard')

@section('content')
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header bg-primary">
                <h3 class="text-white">Edite Profile</h3>
            </div>
            <div class="card-body">
                @if (session('update'))
                <div class="alert alert-success">{{ session('update') }}</div>

                @endif
              <form action="{{ route('author.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input class="form-control" type="text" name="name" value="{{ Auth::guard('author')->user()->name }}" >
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input class="form-control" type="email" name="email" value="{{ Auth::guard('author')->user()->email}}" >
                </div>
                <div class="mb-3">
                    <label class="form-label">Image</label>
                    <input class="form-control" type="file" name="image"   onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                    <img src="{{ asset('uploads/author') }}/{{ Auth::guard('author')->user()->image}}" id="blah" alt="image" width="100" height="100" />
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary" type="submit">Update</button>
                </div>

              </form>
            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="card">
            <div class="card-header bg-primary">
                <h3 class="text-white">Update password</h3>
            </div>
            <div class="card-body">
                @if (session('pass'))
                <div class="alert alert-success">{{ session('pass') }}</div>

                @endif
                <form action="{{ route('author.pass') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="form-label">Current password</label>
                        <input type="password" class="form-control" name="current_password">
                        @error('current_password')
                        <strong class="text-danger">{{ $message }}</strong>

                        @enderror

                        @if (session('err'))
                        <strong class="text-danger">{{ session('err') }}</strong>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="form-label">New password</label>
                        <input type="password" class="form-control" name="password">
                        @error('password')
                        <strong class="text-danger">{{ $message }}</strong>

                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="form-label">Confirm password</label>
                        <input type="password" class="form-control" name="password_confirmation">
                        @if (session('err'))
                        <strong class="text-danger">{{ session('err') }}</strong>
                        @endif
                        @error('password_confirmation')
                        <strong class="text-danger">{{ $message }}</strong>

                        @enderror
                    </div>
                    <div class="mb-2">
                       <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
