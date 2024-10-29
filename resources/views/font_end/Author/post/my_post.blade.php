@extends('font_end.Author.dashboard')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header bg-primary">
                <h3 class="text-white">My Post List</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>SL</th>
                        <th>Title</th>
                        <th>Thumbnail</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($posts as $index=> $post )
                    <tr>



                        <td>{{$index+1  }}</td>

                        <td class="text-wrop">{{$post->title }}</td>
                        <td>
                            <img src="{{ asset('uploads/post/thumbnail') }}/{{ $post->thumbnail }}" alt="">
                        </td>
                        <td>{{ $post->status==1?'publish':'not publish' }}</td>
                        <td>
                            <a href="{{ route('post.delete',$post->id) }}" class="btn btn-danger">Delete</a>
                        </td>
                        @endforeach
                    </tr>

                </table>
            </div>
        </div>
    </div>
</div>

@endsection
