@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header bg-primary">
                <h3 class="text-white">Category List</h3>
            </div>
            <div class="card-body">
                @if (session('del_cat'))

                    <div class="alert alert-success">{{ session('del_cat') }}</div>

                @endif
            <form action="{{ route('check.del') }}" method="POST">
                @csrf
                        <table class="table table-striped">
                            <tr>
                                <th>

                            <div class="form-check">
                                <label class="form-check-label">
                                    <input id="chkSelectAll" type="checkbox"  class="form-check-input"  >
                                    All
                                <i class="input-frame"></i></label>
                            </div>

                                </th>
                                <th>SL</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                            @foreach ($categorys as $index=>$category )


                            <tr>
                                <td>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input chkDel" name="category_id[]" value="{{ $category->id }}">

                                        <i class="input-frame"></i></label>
                                    </div>
                                </td>
                                <td>{{ $index+1 }}</td>
                                <td>{{ $category->category_name }}</td>
                                <td>
                                    <img src="{{ asset('uploads/category') }}/{{ $category->category_image }}" width="150" alt="">
                                </td>
                                <td>

                                    <a href="{{ route('edit.category',$category->id) }}" class="btn btn-primary btn-icon">
                                        <i data-feather="check-square"></i>
                                    </a>

                                    <a href="{{ route('del.category',$category->id) }}" class="btn btn-danger btn-icon">
                                        <i data-feather="trash"></i>
                                    </a>


                                </td>


                            </tr>
                            @endforeach
                        </table>
                 <div class="my-2">
                    <button type="submit" id="del_btn" class="btn btn-danger d-none">All_Delete</button>
                </div>

            </form>
            </div>
        </div>
    </div>


    <div class="col-lg-4">
        <div class="card">
            <div class="card-header bg-primary">
                <h3 class="text-white">Category</h3>
            </div>
            <div class="card-body">




                <form action="{{ route('category.insert') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="form-label">Category_Name</label>
                        <input class="form-control" type="text" name="category_name">
                    </div>
                    <div class="mb-3">
                        <label for="form-label">Category_Image</label>
                        <input class="form-control" type="file" name="category_image" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                        <img src="" id="blah" alt="your image" width="200" height="200"/>
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

@section('footer_script')
@if (session('cat'))
<script>

Swal.fire({
  position: "center",
  icon: "success",
  title: "Your work has been saved",
  showConfirmButton: false,
  timer: 1500
});

//js Checkbox



</script>
@endif

<script>
    //js Checkbox

        $("#chkSelectAll").on('click', function(){
            this.checked ? $(".chkDel").prop("checked",true) : $(".chkDel").prop("checked",false);

            $("#del_btn").toggleClass('d-none');
        });

        $(".chkDel").on('click', function(){


            $("#del_btn").removeClass('d-none');
        })

    </script>
@endsection


