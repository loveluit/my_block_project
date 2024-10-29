@extends('layouts.admin')

@section('content')

<div class="row">
  <div class="col-lg-6 m-auto">
    <div class="card">
        <div class="card-header bg-primary">
            <h3 class="text-white">Edite Category</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('update.category',$cate->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="form-label">Category_Name</label>
                    <input class="form-control" type="text" name="category_name" value="{{ $cate->category_name }}">
                </div>
                <div class="mb-3">
                    <label for="form-label">Category_Image</label>
                    <input class="form-control" type="file" name="category_image" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                    <img src="{{ asset('uploads/category') }}/{{ $cate->category_image }}" id="blah" alt="your image" width="200" height="200"/>
                </div>
                <div class="mb-3">
                 <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
  </div>
</div>
    
@endsection