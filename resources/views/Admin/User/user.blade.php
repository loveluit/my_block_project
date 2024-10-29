@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header bg-primary">
                <h3 class="text-white">User List</h3>
            </div>
            <div class="card-body">
                @if (session('del'))

                <div class="alert alert-success">{{ session('del') }}</div>
                    
                @endif
                <table class="table table-striped">
                    <tr>
                        <th>SL</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Image</th>
                        <th>Action</th>
                      
                    </tr>
                    @foreach ($users as $index=>$user )
                        
                    
                    <tr>
                        <td>{{ $index+1 }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            @if ($user->photo==null)

                            <img src="https://via.placeholder.com/30x30" alt="profile">
                          
                          @else
                          <img width="150" src="{{ asset('uploads/users') }}/{{ $user->photo }}" alt="">
                            
                          @endif
                        </td>
                        <td>
                            <a href="{{ route('delete.user',$user->id) }}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </table>

         

            </div>
        </div>
    </div>
    <!--Add User -->
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header bg-primary">
                <h3 class="text-white">Add User</h3>
            </div>
            <div class="card-body">
                @if (session('add_user'))
                <div class="alert alert-success">{{ session('add_user') }}</div>
                    
                @endif
                <form action="{{ route('add.user') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="form-label">Name:</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="form-label">Email:</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="form-label">Password:</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <div class="mb-3">
                      <button type="submit" class="btn btn-primary">Add User</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

 