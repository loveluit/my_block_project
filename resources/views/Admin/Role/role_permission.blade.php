@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <h3>Role Name List</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>SL</th>
                        <th>Role</th>
                        <th>Permission</th>
                        <th>Action</th>

                    </tr>
                    @foreach ($roles as $index=>$role )


                    <tr>
                        <td>{{$index+1  }}</td>
                        <td>{{$role->name  }}</td>
                        <td class="text-wrap">
                            @foreach ($role->getpermissionNames() as $permission )


                            <span class="badge badge-primary my-1">{{  $permission }}</span>
                            @endforeach
                        </td>
                        <td>
                          <a href="" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        {{-- <div class="card">
            <div class="card-header bg-primary">
                <h3 class="text-white">Role Permission</h3>
            </div>
            <div class="card-body">
                @if (session('role'))
                <div class="alert alert-success">{{ session('role') }}</div>

                @endif
             <form action="{{ route('permission.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label ">Permission_name</label>
                    <input type="text" class="form-control" name="permission_name">
                </div>
                <div class="mb-3">
                  <button type="submit" class="btn btn-primary">Add_permission</button>
                </div>
             </form>
            </div>
        </div> --}}

        <div class="card">
            <div class="card-header bg-primary">
                <h3 class="text-white"> Add New Role</h3>
            </div>
            <div class="card-body">
                @if (session('role'))
                <div class="alert alert-success">{{ session('role') }}</div>

                @endif
             <form action="{{ route('role.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label ">Role_name</label>
                    <input type="text" class="form-control" name="role_name">
                </div>
                @foreach ( $permissions as $permission)


                <div class="form-check form-check-inline">
                    <label class="form-check-label">
                        <input type="checkbox" value="{{$permission->name  }}" class="form-check-input" name="permission[]">
                       {{ $permission->name }}
                    <i class="input-frame"></i></label>
                </div>
                @endforeach

                <div class="mb-3">
                  <button type="submit" class="btn btn-primary">Add_Role</button>
                </div>
             </form>
            </div>
        </div>
    </div>
</div>

@endsection
