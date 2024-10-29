@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-lg-10 m-auto">
        <div class="card">
            <div class="card-header bg-primary">
                <h3 class="text-white">Author List</h3>
            </div>
            <div class="card-body">
                <table class="table table-striped">

                    <tr>
                        <th>SL</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($authors as $index=>$author )


                    <tr>
                        <td>{{ $index+1 }}</td>
                        <td>{{ $author->name }}</td>
                        <td>{{ $author->email }}</td>
                        <td>
                            @if ($author->image==null)
                            <img src="https://via.placeholder.com/80x80" alt="">
                            @else
                            <img src="{{ asset('uploads/author') }}/{{ $author->image }}" width="150" alt="">
                            @endif


                        </td>

                        <td>
                            <span class="badge badge-{{ $author->status==1 ?'success':'secondary' }}">{{ $author->status==1 ?'Active':'Deactive' }} </span>
                        </td>
                        <td class="text-wrap">
                            <a href="{{ route('author.status',$author->id) }}" class="btn btn-{{  $author->status==1 ?'success':'secondary' }}">Change Status</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
