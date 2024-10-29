@extends('layouts.admin');


@section('content')

<div class="row">
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header bg-primary">
                <h3 class="text-white">Change Profile</h3>
            </div>
            <div class="card-body">
                @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
                    
                @endif
                <form action="{{ route('update.profile') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="form-label">Name</label>
                        <input type="text" class="form-control" name="name" value="{{ Auth::user()->name }}">
                    </div>
                    <div class="mb-3">
                        <label for="form-label">Email</label>
                        <input type="email" class="form-control" name="email" value="{{ Auth::user()->email }}" >
                    </div>
                    <div class="mb-2">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--Change password-->
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header bg-primary">
                <h3 class="text-white">Change password</h3>
            </div>
            <div class="card-body">
                @if (session('pass'))
                <div class="alert alert-success">{{ session('pass') }}</div>
                    
                @endif
                <form action="{{ route('change.pass') }}" method="post">
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
     <!--Change photo-->
     <div class="col-lg-4">
        <div class="card">
            <div class="card-header bg-primary">
                <h3 class="text-white">Change Photo</h3>
            </div>
            <div class="card-body">
                @if (session('update'))

                <div class="alert alert-success">{{ session('update') }}</div>
                    
                @endif
                <form action="{{ route('update.photo') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                    
                        <label for="form-label">Change Photo</label>
                        <input type="file" class="form-control"  onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])" name="photo" >
                        <img src="{{ asset('uploads/users') }}/{{ Auth::user()->photo }}" id="blah" alt="your image" width="200" height="200"    />
                        @error('photo')

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