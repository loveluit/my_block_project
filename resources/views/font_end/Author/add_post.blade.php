@extends('font_end.Author.dashboard')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header bg-primary">
                <h3 class="text-white">Add Post</h3>
            </div>
            <div class="card-body">
                @if (session('post'))
                <div class="alert alert-success">{{ session('post') }}</div>

                @endif
                <form action="{{ route('post.insert') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-lg-3">
                            <div class="mb-3">

                                <label class="form-label">Category Name</label>
                                <select name="category_id" class="form-control">
                                    @foreach ($categorys as $category )


                                    <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                    @endforeach
                                </select>

                            </div>
                        </div>

                        <div class="col-lg-3">

                            <div class="mb-3">
                                <label class="form-label">Read Time</label>
                                <input type="number" class="form-control" name="read_time">
                            </div>
                        </div>

                        <div class="col-lg-6">

                            <div class="mb-3">
                                <label class="form-label">Title</label>
                                <input type="text" class="form-control" name="title">
                            </div>
                        </div>

                        <div class="col-lg-12">

                            <div class="mb-3">
                                <label class="form-label">Description</label>
                               <textarea id="summernote" class="form-control" name="desp"  rows="12"></textarea>
                            </div>
                        </div>

                        <div class="col-lg-12">

                            <div class="mb-3">
                                <label class="form-label">Tags</label>
                                <select id="select-gear" name="tag_id[]" class="demo-default" multiple placeholder="Select tags">

                                    <optgroup label="Climbing">
                                        @foreach ($tags as $tag)


                                        <option value="{{ $tag->id }}">{{ $tag->tag_name }}</option>

                                        @endforeach

                                    </optgroup>

                                  </select>

                            </div>
                        </div>

                        <div class="col-lg-6">

                            <div class="mb-3">
                                <label class="form-label">Upload Thumbnail </label>
                                <input type="file" class="form-control" name="thumbnail">
                            </div>
                        </div>
                        <div class="col-lg-6">

                            <div class="mb-3">
                                <label class="form-label">Upload Priview</label>
                                <input type="file" class="form-control" name="priview">
                            </div>
                        </div>

                        <div class="col-lg-3">

                            <div class="mb-3">

                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>


                    </div>


                </form>
            </div>
        </div>



    </div>
</div>

@endsection


