@extends('layouts.admin')

@section('content')

    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header bg-primary">
                    <h3 class="text-white">Tags List</h3>
                </div>
                <div class="card-body">
                    @if (session('del'))
                    <div class="alert alert-success">{{ session('del') }}</div>

                    @endif
                    <table class="table table-bodered">

                        <tr>
                            <th>SL</th>
                            <th>Tag_Name</th>
                            <th>Action</th>
                        </tr>
                    @foreach ($tags as $index=> $tag )


                        <tr>
                            <td>{{ $index+1 }}</td>
                            <td>{{ $tag->tag_name }}</td>
                            <td>
                                <a href="{{ route('tag.del',$tag->id) }}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header bg-primary">
                    <h3 class="text-white">Tags</h3>
                </div>
                <div class="card-body">
                    @if (session('tag'))

                    <div class="alert alert-success">{{ session('tag') }}</div>

                    @endif
                    <form action="{{ route('tag.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Tag_Name</label>
                            <input class="form-control" type="text" name="tag_name">
                        </div>
                        <div class="my-2">
                            <button type="submit" class="btn btn-primary">Add_Tag</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
